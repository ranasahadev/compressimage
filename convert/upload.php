<?php 
 
function compressImage($source, $destination, $quality) { 
    // Get image info 
    $imgInfo = getimagesize($source); 
    $mime = $imgInfo['mime'];    
     
    // Create a new image from file 
    switch($mime){ 
        case 'image/jpeg': 
            $destination = 'uploads/'.time().'.png';
            $image = imagecreatefromjpeg($source);
            // Save image 
    		imagepng($image, $destination, 1); 
            break;             
        case 'image/png':
            $destination = 'uploads/'.time().'.jpg';
            $image = imagecreatefrompng($source); 
            // Save image 
    		imagejpeg($image, $destination, 100); 
            break; 
        case 'image/gif': 
            $destination = 'uploads/'.time().'.jpg';
            $image = imagecreatefromgif($source); 
            // Save image 
    		imagejpeg($image, $destination); 
            break; 
        default: 
            $image = imagecreatefromjpeg($source); 
    } 
     
    // Save image 
    //imagejpeg($image, $destination, $quality); 
     
    // Return compressed image 
    return $destination; 
} 
 
 
// File upload path 
$uploadPath = "uploads/"; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // File info 
        $fileName = basename($_FILES["image"]["name"]); 
        $imageUploadPath = $uploadPath . $fileName; 
        $fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','jpeg','JPG','JPEG','png','PNG','gif','GIF'); //'png' 'gif' 'PNG' 'GIF'
        if(in_array($fileType, $allowTypes)){ 
            // Image temp source 
            $imageTemp = $_FILES["image"]["tmp_name"]; 
            $imageSize = $_FILES["image"]["size"];
            $imageSize = formatSizeUnits($imageSize);
                         
            // Compress size and upload image 
            $compressedImage = compressImage($imageTemp, $imageUploadPath, 75); 
             
            if($compressedImage){ 
                $compressedImageSize = filesize($compressedImage);
                $compressedImageSize = formatSizeUnits($compressedImageSize);
                
                $status = 'success'; 
                // $statusMsg = "Image compressed successfully."; 
            }else{ 
                $statusMsg = "Sorry, Image Convert failed! please try again"; 
            } 
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 


function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
}
// Display status message 
echo $statusMsg; 
 
?>
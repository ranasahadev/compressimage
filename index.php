<?php include 'upload.php'; ?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="shortcut icon" href="apple-icon-76x76.png" type="image/png">
      <title>Compress image online, Resize image online, minimize image online, minify image Online, make small image from big image</title>
      <meta http-equiv="x-ua-compatible" content="IE=edge" />
      <meta name="generator" content="Compress Image" />
      <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=12.0, minimum-scale=.25, user-scalable=yes" />
      <meta name="application-name" content="Compress Image" />
      <meta name="author" content="Sahdev Rana" />
      <meta name="description" content="Compress Image, Resize image, Compress image online, minify image, minimize image online, minify image Online, make small image from big image, compress image with good quality" />
      <meta name="robots" content="index,follow" />
      <meta name="keywords" content="Compress Image, Resize image, Compress image online, minify image, minify image Online, minimize image online" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="Compress Image" />
      <meta property="og:site_name" content="Compress Image" />
      <meta name="twitter:card" content="summary" />
      <meta name="twitter:title" content="Compress Image" />
      <meta name="twitter:image" content="apple-icon-76x76.png" />
      <meta name="format-detection" content="telephone=no" />
      <meta name="apple-mobile-web-app-title" content="Compress Image" />
      <meta name="theme-color" content="#ffffff" />
      <meta name="msapplication-navbutton-color" content="#0455A1" />
      <meta name="msapplication-tilecolor" content="#ffffff" />
      <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
      <meta name="apple-mobile-web-app-capable" content="no" />
      <meta name="twitter:description" content="Compress Image, Resize image, Compress image online, minify image, minify Online, make small image from big image" />
      <meta name="og:url" content="/" />

      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-PBGQJXL');</script>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   </head>
   <body>    

      <div class="container" style="margin-top:20px;">
         <div class="panel panel-primary">
            <div class="panel-heading text-center"><h1>Compress Image online, Resize image online, minimize image online, minify image Online, make small image from big image</h1><strong>Plesae Upload jpg, jpeg, png Image for Compress</strong></div>
            <div class="panel-body">
               <div class="row">
                  <div class="col-sm-3">
                        <ul>
                           <li>Compress Images</li>
                           <li><a href="convert">Convert Images</a></li>
                        </ul>
                  </div>
                  <div class="col-sm-9">
                     <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                           <label><b>Please Select Image[jpg, jpeg, png] File to Compress:</b></label><br/>
                           <input type="file" class="form-control-file border" name="image">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Compress Image">
                     </form>
                  </div>
               </div>
               <hr/>
               <div class="result">
                  <?php if(!empty($compressedImage)){ ?>
                  <p><b>Original Image Size:</b><?php echo $imageSize; ?> </p>
                  <p><b>Compressed Image Size:</b><?php echo $compressedImageSize; ?>
                     <a href="<?php echo $compressedImage; ?>" download="myimage"><img src="download.jpg"></a>
                  </p>
                  <div class="">
                     <img src="<?php echo $compressedImage; ?>" height="100%" width="100%">
                  </div>
                  <?php } ?>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
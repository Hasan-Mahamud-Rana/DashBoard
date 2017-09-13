<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Test Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="row">
      <div class="large-12 columns">
        <h1>Welcome to Bording Vista</h1>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <div class="callout">
          <?php
          $dir_open = opendir('../');
          while(false !== ($filename = readdir($dir_open))){
            if($filename != "." && $filename != ".."){
              $link = "<a href='../$filename'> $filename </a><br />";
              echo $link;
            }
          }
          closedir($dir_open);
          //echo '<a href="./phpinfo.php"> phpinfo </a><br />';

          ?>
        </div>
      </div>
    </div>
  </div>
  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.js"></script>
  <script src="js/app.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Hello World</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />

</head>

<body>
  <?php
  include 'php/header.php';

  // set default page to home
  $current_page = 'home';

  // check what page
  if(array_key_exists('page',$_GET)) {
    $current_page = $_GET['page'];
  }

  // switch pages
  switch ($current_page) {
    case 'home':
      include 'php/home.php';
      break;
    case 'content':
      include 'php/content.php';
      break;
    default:
      include 'php/home.php';
      break;
  }

  include 'php/footer.php';

  ?>
</body>

</html>

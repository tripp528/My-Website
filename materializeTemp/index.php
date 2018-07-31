<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
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

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/bin/materialize.js"></script>
  <script src="js/bin/init.js"></script>

  </body>
</html>

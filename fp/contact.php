<!DOCTYPE html>
<html lang="en">
<head>
<title>Purplestar</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/tables.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/lightbox.css" />
<link rel="stylesheet" href="css/fp.css" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i>Purplestar</a></h1>
<nav id="cssmenu">
  <ul>
     <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120</span></a></li>
     <li><a href="index.php"><span><i class="fa fa-fw fa-cube"></i>ABOUT</span></a></li>
      <li><a href="template.php"><span><i class="fa fa-fw fa-camera-retro"></i>Template</span></a></li>
     <li><a href="gallery.php"><span><i class="fa fa-fw fa-camera-retro"></i>GALLERY</span></a></li>
       <li><a href="discussion.php"><span><i class="fa fa-fw fa-camera-retro"></i>DISCUSSION</span></a></li>
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
        <ul>
           <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
           <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
        </ul>
     </li>
     <li><a href="webcam.php"><span><i class="fa fa-fw fa-eye"></i> Web Cam</span></a></li>
      <li><a href="contact.php"><span><i class="fa fa-fw fa-eye"></i>Contact me</span></a></li>
  </ul>
</nav>
</header>
    <main role="main">
	 <header><h3>Contact Hongbin</h3></header>
	<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "liu01010303@gmail.com";  //place your/your client's email address here
        $toName = "King"; //place your client's name here
        $website = "Purplestar";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

     <footer>
      <p><small>&copy; 2020 by <a href="contact.php">Contact Hongbin Liu </a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
  </script>
     </main>
 </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hongbin's WEB120 Big Website</title>
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
<link rel="stylesheet" href="css/big.css" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Hongbin's WEB120 Big Website</a></h1>
<nav id="cssmenu">
  <ul>
     <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120</span></a></li>
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> BIG</span></a></li>
     <li><a href="big3.php"><span><i class="fa fa-fw fa-cube"></i> Flexbox</span></a></li>
     <li><a href="big2.php"><span><i class="fa fa-fw fa-camera-retro"></i> Galleries</span></a></li>
    <li><a href="gallery.php"><span><i class="fa fa-fw fa-camera-retro"></i> Gallery</span></a></li>
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
        <ul>
           <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
           <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
           <li><a href="web.php"><span><i class="fa fa-fw fa-youtube-square"></i> YouTube</span></a></li>
        </ul>
     </li>
     <li><a href="big4.php"><span><i class="fa fa-fw fa-shopping-basket"></i> Shopping Carts</span></a></li>
     <li><a href="big1.php"><span><i class="fa fa-fw fa-html5"></i> Site vs App</span></a></li>
     <li><a href="webcam.php"><span><i class="fa fa-fw fa-eye"></i> Web Cam</span></a></li>
  </ul>
</nav>
</header>
     <!-- START LEFT COLUMN -->
<section>
<h2 class="subheader">Welcome</h2>
 <p>Provide an introduction to this BIG website and explain the web developer examples (pages) you've created for this website.</p>
  <p> To interview for a web job, thoughtfully contribute to a web team, and provide guidance for web clients, it's vital that we keep learning to stay on top of current and coming web topics and coding practices. Describe three or more ways for you to grow and maintain your web knowledge and skills.</p>
</section>
<!-- END LEFT COLUMN -->

<!-- START RIGHT COLUMN -->
<aside>
<h3>My Favorite Web Resources</h3>
  <ul>
      <li><a href="#">Link 1</a></li>
      <li><a href="#">Link 2</a></li>
      <li><a href="#">Link 3</a></li>
  </ul>
</aside>
<!-- END RIGHT COLUMN -->
 <footer>
  <p><small>&copy; 2020 - <?=date('Y')?> by <a href="contactme.php" target="_blank">Hongbin Liu</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
<!-- END WRAPPER -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
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
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
<script src="js/discussion.js"></script>
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
    
<section>
<h2 class="subheader">Discussion</h2>
    <p>Let's discuss the mysteries of the universe here</p>
    
    <div>
        <div>
        <label>Title</label>
        <input type="text" name="DiscussionTitle" class="forn-control" size="50">
        </div>
        <div>
            <label>Centent</label>
            <textarea class="newDiscussionText" name="newDiscussionText" rows="20" ></textarea>
        </div>
        <div>
        <input type="button" value="Discuss" onclick="startdissussion();" />
    </div>
    </div>
</section>

 <footer>
  <p><small>&copy; 2020 - <?=date('Y')?> by <a href="contact.php" target="_blank">Hongbin Liu</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
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
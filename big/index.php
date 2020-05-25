<!DOCTYPE html>
<html lang="en">
 <head>
     <title>Hongbin's WEB120 Portal Page</title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/big.css" />
  <link rel="stylesheet" href="css/nav.css" />
      <!-- jQuery -->
     <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
     <!-- MenuMaker Plugin -->
     <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
     <!-- Icon Library -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="css/lightbox.css" />
     <script> src="js/script.js"</script>
 </head>
 <body>
     
   <main>
    <header>
       <h1><a href="index.html">Hongbin's WEB120 Portal Page</a></h1>
     <nav id="cssmenu">
            <ul>
                <li><a href="../index.php"><i class="fa fa-fw fa-institution"></i> WEB120</a></li>
                <li><a href="index.php"><i class="fa fa-fw fa-home"></i> BIG Website</a></li>
                <!-- drop down menu for research topic pages -->
                <li><a href="#">Research Topcics</a>
                    <ul>
                           <li><a href="responsive vs mobile.php"><i class="fa fa-fw fa-globe"></i> Responsive vs Mobile</a></li>
                    </ul>
                </li>
                
                <!-- drop down menu for Google tool pages -->
                <li><a href="#">Google Tools</a>
                    <ul>
                        <li><a href="calendar.php"><i class="fa fa-fw fa-calendar"></i> Calendar</a></li>
                        <li><a href="map.php"><i class="fa fa-fw fa-map-o"></i> Map</a></li>
                    </ul>
                </li>
                <li><a href="contact.php"><i class="fa fa-check-square-o" aria-hidden="true"></i> Contact me</a></li>
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
</main>
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

 </body>
</html>
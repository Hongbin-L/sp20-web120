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
<div id="cssmenu">
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
</div>
</header>
     <!-- START LEFT COLUMN -->
<section>
           <h2>Flexbox</h2>
           <p> Flexbox is very useful for our web layout. Why should we choose flexbox? “In a perfect world of browser support, the reason you'd choose to use flexbox is because you want to lay a collection of items out in one direction or another. As you lay out your items you want to control the dimensions of the items in that one dimension, or control the spacing between items. These are the uses that flexbox was designed for.” (MDN contributors)<br/></p>
            <p>Browser support for flexbox is excellent, and the majority of browsers do not need a prefix at this point. Safari was the last of the major browsers to remove prefixes, with the release of Safari 9 in 2015. The two browsers you should still keep in mind for cross-browser compatibility are: Internet Explorer 10, which implemented the display: flexbox version of the specification with the -ms- prefix. UC Browser, which still supports the 2009 display: box version only with the -webkit- prefix. Note also that Internet Explorer 11 supports the modern display: flex specification however it has a number of bugs in the implementation.((MDN contributors)<br/></p>
            <p>The majority of issues with flexbox relate to the changes in the specification, as it has been developed, and the fact that many of us were attempting to use an experimental specification in production. If you are trying to ensure backwards compatibility with old versions of browsers, and in particular IE10 and 11, the Flexbugs site is a helpful resource. You will see that many of the listed bugs apply to old browser versions and are fixed in current browsers. Each of the bugs has a workaround listed — which can save you many hours of puzzling. If you want to include very old browsers with flexbox support then you can include the vendor prefixes in your CSS in addition to the unprefixed version. This is becoming less and less of a requirement today as support is widespread.((MDN contributors)
<br/></p>
        </section>
<!-- END LEFT COLUMN -->

<!-- START RIGHT COLUMN -->
 <aside>
           <h3>Works Cite:</h3>
           <dl>
                <dt>MDN. “Backwards Compatibility of Flexbox.” MDN Web Docs, developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Backwards_Compatibility_of_Flexbox.Web 20 May, 2020.</dt>
                <dd><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Backwards_Compatibility_of_Flexbox">https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Backwards_Compatibility_of_Flexbox</a></dd>
               <dt>MDN. “Typical Use Cases of Flexbox.” MDN Web Docs, developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Typical_Use_Cases_of_Flexbox. Web 20 May, 2020.</dt>
                <dd><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Typical_Use_Cases_of_Flexbox">https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Typical_Use_Cases_of_Flexbox</a></dd>
           </dl>
       </aside>
<!-- END RIGHT COLUMN -->
     <footer>
      <p><small>&copy; 2020 by <a href="contact.php">Contact Hongbin Liu </a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    </footer>
  </main>
     
 </body>
</html>
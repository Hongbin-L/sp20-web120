<!DOCTYPE html>
<html>
<head>
<title>Hongbin's WEB120 Portal Page</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="css/table.css" />
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Hongbin Liu SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php"  class="selected">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contact.php">Contact Hongbin</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
     
   <main class="wrapper">
       
       <h2 class="subheader">Audience, Issues and Approach</h2>
         <table class="client">
             <tr>
                 <th>Client's name and final decision maker</th>
                 <td>King and Hongbin</td>
             </tr>
             <tr>
                 <th>Client's business/website name</th>
                 <td>PurpleStar</td>
             </tr>
             <tr>
                 <th>Redesign or brand new site</th>
                 <td>New</td>
             </tr>
             <tr>
                 <th>Type of website</th>
                 <td>Community, News, Informational, Science, History</td>
             </tr>
             <tr>
                 <th>Client's goal</th>
                 <td>We are interested in the unknown science, and we want people to know more than earth.</td>
             </tr>
       </table>
       
       
       <table class="audience">
          <thead>
           <tr>
               <th>Audience</th>
               <th>Issues</th>
               <th>Approach</th>
           </tr>
          </thead>
           <tr>
               <td>
                   <li>It is a forum for anyone interested in unnatural things like dark matter, antimatter and future technologies.(No age limit)</li>
                   <li>Some religious people, or people who like theology.</li>
                   <li>Some peoplr are interested in the future like the prophets.</li>
               </td>
               <td>
                   <li>What are unnaturral phenomena</li>
                   <li>New knowledge</li>
                   <li>Learn more about what science can't explain</li>
               </td>
               <td>
                   <li>Customer service</li>
                   <li>Q&amp;A</li>
                   <li>Contact us</li>
               </td>
           </tr>
           <tr>
                <td>
                   <li>Any business can sign up to advertise in this forum.</li>
                   <li>Some companies could rent the forum for a short period of time to do some online activities.</li>
                   <li>Provide a platform for technology companies to introduce their new products.</li>
               </td>
               <td>
                   <li>Commissions</li>
                   <li>Expenses</li>
                   <li>Rental</li>
               </td>
               <td>
                   <li>Advertising links</li>
                   <li>Company information</li>
                   <li>Product introduction</li>
               </td>
           </tr>
           <tr>
                <td>
                   <li>We could work with news companies that report unnatural phenomena.</li>
                   <li>We will also be working with archaeologists to explore human prehistoric culture.</li>
                   <li>We work with youtubers who talk about unknown science or unnatural phenomena.</li>
               </td>
               <td>
                   <li>Source of information</li>
                   <li>Connection of information</li>
                   <li>Historical background</li>
               </td>
               <td>
                   <li>Video links</li>
                   <li>News links</li>
                   <li>Contact Info</li>
               </td>
           </tr>
       </table>
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
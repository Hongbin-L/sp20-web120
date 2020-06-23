<?php

/*
portal-config.php
Used to store all of our WEB120 configuration information
*/

//prevents data from being sent early
ob_start();
//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = "Hongbin Liu's WEB120 Website";
        $logo = "fa-home";
    break;
        
    case 'discussion.php':
        $title = "Hongbin Liu's FP Discussion";
    break;
        
    case 'gallery.php':
        $title = "Hongbin Liu's FP gallery";
    break;

    case 'map.php':
        $title = "Hongbin Liu's FP map";
    break;
        
    case 'webcam.php':
        $title = "Hongbin Liu's FP webcam";
    break;
        
    case 'calendar.php':
        $title = "Hongbin Liu's FP Calendar";
    break;
        
    case 'web.php':
        $title = "Hongbin Liu's WEB120 FP";
    break;
        
    case 'contactme.php':
        $title = "Hongbin's FP Contact Page";
        $logo = "fa-paper-plane-o";
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Contact Hongbin';
    break;


    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default 
}

//place URL & labels in the array here for navigation:

$nav1['index.php'] = "Welcome";
$nav1['discussion.php'] = "Discussion";
$nav1['gallery.php'] = "gallery";
$nav1['calendar.php'] = "Calendar";
$nav1['contact.php'] = "Contact Hongbin";
$nav1['map.php'] = "Map";

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/

function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($text == Big)
        {
            $myReturn .= '
                <div id="cssmenu">
                    <ul>
                        <li class="active"><a href="#">' . $text . '</a>
                            <ul>
                                <li><a href="big1.php"><i class="fa fa-fw fa-globe"></i> Responsive vs Mobile</a></li>
                                <li><a href="big2.php"><i class="fa fa-fw fa-globe"></i> Galleries</a></li>
                                <li><a href="big3.php"><i class="fa fa-fw fa-globe"></i> Flexbox</a></li>
                                <li><a href="big4.php"><i class="fa fa-fw fa-globe"></i> Monetizing websites</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            ' . PHP_EOL;
        }
        else if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>
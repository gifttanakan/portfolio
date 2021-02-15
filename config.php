<?php

// config for my current porfolio

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// switch page title

switch(THIS_PAGE) {
    case 'index.php' :
    $title = 'Home | Gift\'s Portfolio';
    break;
        
    case 'projects.php' :
    $title = 'Projects | Gift\'s Portfolio';
    break;
        
    case 'testimonials.php' :
    $title = 'Testimonials | Gift\'s Portfolio';
    break;
        
    case 'about.php' :
    $title = 'About | Gift\'s Portfolio';
    break;
        
    case 'contact.php' :
    $title = 'Contact | Gift\'s Portfolio';
    break;
}

// makelinks function

$nav['index.php'] = 'Home';
$nav['projects.php'] = 'Projects';
$nav['testimonials.php'] = 'Testimonials';
$nav['about.php'] = 'About';
$nav['contact.php'] = 'Contact';

function makeLinks($nav) {
$myReturn = '';
foreach($nav as $key => $value) {
if(THIS_PAGE == $key) {
$myReturn .= '<a href=" '.$key.' " class= "active"> '.$value.' </a>';

} else {
$myReturn .= '<a href=" '.$key.' "> '.$value.' </a>';

} // end else

} // end foreach

// always remember to return $myReturn
return $myReturn;
} // end funciton


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
        
    case 'scoopwireframe.php' :
    $title = 'Projects | Scoop Homepage Wireframe';
    break;
        
    case 'artwireframe.php' :
    $title = 'Projects | The Diversity of Art Wireframe';
    break;
        
    case 'zerowastenav.php' :
    $title = 'Projects | Zero Waste Navigator Introduction';
    break;
        
    case 'mindfulgiftguide.php' :
    $title = 'Projects | Mindful gifts guide for this holiday';
    break;
        
    case 'diversityofart.php' :
    $title = 'Projects | The Diversity of Art';
    break;
        
    case 'thecraftminded.php' :
    $title = 'Projects | The Craft Minded Blog';
    break;
        
    case 'collegian.php' :
    $title = 'Projects | The Seattle Collegian';
    break;
        
    case 'scoopwix.php' :
    $title = 'Projects | Scoop Marketplace';
    break;
        
    case 'scoopsquare.php' :
    $title = 'Projects | Scoop Marketplace Online Shop';
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
        
    case 'thx.php' :
    $title = 'Thanks | Gift\'s Portfolio';
    break;
}

// makelinks function for main nav

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

/************** My form *******************/

$firstName = '';
$lastName = '';
$email = '';
$medium = '';
$topic ='';
//$frequency = '';
//$weekly = '';
//$biWeekly = '';
//$gifttips = '';
//$privacy = '';
$comments = '';
//$gifttips = array();

$firstNameErr = '';
$lastNameErr = '';
$emailErr = '';
$medErr = '';
$topErr ='';
//$frequencyErr = '';
//$gifttipsErr = '';
//$privacyErr = '';
$commentsErr = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

//if my name is empty, we will have created a variable called $nameErr and we will say Please fill out your name and this is assigned to the $nameErr. Now, if it's not empty, $name = $_POST['name']
    
if(empty($_POST['firstName'])) {
$firstNameErr = 'Please fill out your first name.';
} else {
$firstName = $_POST['firstName'];
}

if(empty($_POST['lastName'])) {
$lastNameErr = 'Please fill out your last name.';
} else {
$lastName = $_POST['lastName'];
}

if(empty($_POST['email'])) {
$emailErr = 'Please fill out your email.';
} else {
$email = $_POST['email'];
}

if(empty($_POST['medium'])) {
$medErr = 'Please choose one.';
} else {
$medium = $_POST['medium'];
}
    
if(empty($_POST['topic'])) {
$topErr = 'Please choose one.';
} else {
$topic = $_POST['topic'];
}

//if(empty($_POST['frequency'])) {
//$frequencyErr = 'Please choose one!';
//} else {
//$frequency = $_POST['frequency'];
//}

// logic is if gender is equal to male, then male is checked

//if($frequency == 'weekly') {
//$weekly = 'checked';
//} elseif ($frequency == 'bi-weekly') {
//$biWeekly = 'checked';
//}

////////////comment out cuz I don't need this function ////////////////
    
//if(empty($_POST['gifttips'])) {
//$gifttipsErr = 'Let\'s pick some tips.';
//} else {
//$gifttips = $_POST['gifttips'];
//}

//if(empty($_POST['privacy'])) {
//$privacyErr = 'Please agree to our privacy rules!';
//} else {
//$privacy = $_POST['privacy'];
//}

if(empty($_POST['comments'])) {
$commentsErr = 'Please include your comments';
} else {
$comments = $_POST['comments'];
}

// if end user checks the checkboxes, all of them we want to know
// implode the array of wines - so create a function for that!

////////////comment out cuz I don't need this function ////////////////
    
//function myGifttips() {
//$myReturn = '';
//if(!empty($_POST['gifttips'])) { // meaning if wines are not empty do this...
//$myReturn = implode(', ', $_POST['gifttips']);
//} return $myReturn;// end if
//
//} // end function

if(isset($_POST['firstName'], 
$_POST['lastName'],
//$_POST['frequency'],
$_POST['topic'],
$_POST['comments'])) {
//$_POST['privacy'])) {

$to = 'tanakan.gth@gmail.com';
$subject = 'Email from your Portfolio!! ' .date('m/d/y');
$body = ''.$firstName.' has filled out your form '.PHP_EOL.'';
$body .= '  Their email: '.$email.' '.PHP_EOL.'';
//$body .= '  They will receive tips about: '.myGifttips().' '.PHP_EOL.'';
$body .= '  They knew you from: '.$medium.' '.PHP_EOL.'';
$body .= '  They want to know about: '.$topic.' '.PHP_EOL.'';
$body .= '  Comments: '.$comments.'';

$headers = array(
'From' => 'no-reply@tricia-mcmillan.dreamhost.com',
'Reply-to' => ' '.$email.'');

mail($to, $subject, $body, $headers);
header('Location: thx.php');
}

} //close if $_SERVER

// PLEASE REMEMBER!! - this is placed at the very bottom of your config file

function myerror($myFile, $myLine, $errorMsg) {
    
    if(defined('DEBUG') && DEBUG) {
        echo 'Error in file: <b> '.$myFile.' </b> on line: <b>'.$myLine.'</b>';
        echo 'Error message: <b> '.$errorMsg.' </b>';
        die();
    } else {
        echo ' We have a problem!';
        die();
    }
}

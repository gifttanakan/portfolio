<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" />
        <title><?php echo $title; ?></title>
        <link href="css/styles.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
        <div class="under-header">
            </div>
        <div class="wrapper">
            <header>
                <a href="index.php"><img id="logo" src="images/portfolio_logo_white_new.png" alt="Portfolio logo"></a>
                <div class="headtext">
                    <h1>Gift - Tanakan Homsaen</h1>
                    <h2 class="h2-head">Web Developer | Work &amp; Experience</h2>
                </div>
            </header>
                
            <nav class="topnav" id="myTopnav">
                
                <?php echo makeLinks($nav); ?>
                
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>  
            </nav>
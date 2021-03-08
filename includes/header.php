<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" />
        <title><?php echo $title; ?></title>
        <link rel="shortcut icon" type="image/png" href="images/favicon_current.png"/>
        <link href="css/styles.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--        pagination from w3school-->
<!--        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
        <!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=TRACKING_ID"></script>
<!---------Google Analytics tracting script------->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-DLJBGS4V8E');
</script>
        <!---------Google Analytics tracting script------->

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
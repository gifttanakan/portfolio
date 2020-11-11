<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" />
        <title>Gift's Portfolio</title>
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
                
                <a href="index.php" class="active">Home</a>
                <a href="index.php">Work</a>
                <a href="index.php">Testimonials</a>
                <a href="index.php">About</a>
                <a href="index.php">Contact</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>  
            </nav>
            <main>
                <div id="short-bio">
                <h2 class="welcome">Welcome to my portfolio!</h2>
                    <div class="profile_img">
                        <img src ="images/GiftRedimension.png" alt="GiftImage"> </div>
<!--                <p>My name is Gift. I'm studying Programming Associate Degree at Seattle Central College. I also work as a web manager at a student-run newspaper - The Seattle Collegian. Despite uncertainties of everything we're facing right now, I still have a dream. I want to master my skills in web development and programming and utilize them in the causes I care about most, the environment and climate change.</p>-->
                <p>My name is Gift, a programming student at Seattle Central College and a web developer at The Seattle Collegian, a student-run newspaper. I also build and redesign websites for local small businesses. Starting from clarifying the purposes of their online presence, values, and unique selling points, curating ideas and communication methods, structuring the layout, and building the website.</p>
                
<!--
                I'd be more than happy to work with you whether you want to redesign the existing website or build a new one. Explore my work and and contact me.  
                </p>
-->
                </div>
                <div id="work-section">
                <h2>Work &amp; Experience</h2>
                    
                <div class="container">
                    <div class="item project1">
                        <div class="work_img">
                            <img src ="images/scoop_home.png" alt="Scoop Marketplace Home Page">
                        </div>
                            <div class="work_points">
                                <h3>Project1</h3>
                                <ul>
                                    <li>work1
                    My name is Gift, a programming  </li>
                                    <li>work1
                    My name is Gift, a programming </li>
                                    <li>work1
                    My name is Gift, a programming </li>
                                
                                </ul>
                    </div>
                    </div> <!--end item-->
                    
                    <div class="item project2">
                        <div class="work_img">
                            <img src ="images/scoop_online_home.png" alt="Scoop Marketplace Home Page">
                        </div>
                            <div class="work_points">
                                <h3>Project2</h3>
                                <ul>
                                    <li>work1
                    My name is Gift, a programming  </li>
                                    <li>work1
                    My name is Gift, a programming </li>
                                    <li>work1
                    My name is Gift, a programming </li>
                                
                                </ul>
                    </div>
                    </div> <!--end item-->
                    
                    
                    <div class="item project3">
                        <div class="work_img">
                            <img src ="images/scoop_home.png" alt="Scoop Marketplace Home Page">
                        </div>
                            <div class="work_points">
                                <h3>Project1</h3>
                                <ul>
                                    <li>work1
                    My name is Gift, a programming  </li>
                                    <li>work1
                    My name is Gift, a programming </li>
                                    <li>work1
                    My name is Gift, a programming </li>
                                
                                </ul>
                    </div>
                    </div> <!--end item-->
                    
                    <div class="item project4">
                        <div class="work_img">
                            <img src ="images/scoop_online_home.png" alt="Scoop Marketplace Home Page">
                        </div>
                            <div class="work_points">
                                <h3>Project2</h3>
                                <ul>
                                    <li>work1
                    My name is Gift, a programming  </li>
                                    <li>work1
                    My name is Gift, a programming </li>
                                    <li>work1
                    My name is Gift, a programming </li>
                                
                                </ul>
                    </div>
                    </div> <!--end item-->
                    
                    </div> <!---end container-->
                    
                    
                    
            </div>
            </main>
            <!--   <        aside class="item related-links">Related Links</aside> -->
            <aside>
<!--
            <h2>Platforms I use</h2>
                <ul>
                    <li>WordPress</li>
                    <li>SquareUp</li>
                    <li>GoDaddy</li>
                    <li>Wix</li>
                </ul>
-->
<!--
            <h2>Skills</h2>    
                <ul>
                    <li>Web audit</li>
                    <li>Research &amp; documentation </li>
                    <li>Web content planning</li>
                    <li>Layout designing</li>
                    <li>Wireframing</li>
                    <li>Responsive Design</li>
                    <li>HTML, CSS, PHP</li>
                    
                </ul>
-->
<!--
            <h2>Work</h2>
                <ul>
                    <li><a href="https://www.scoopmarketplace.com/" target="_blank">Scoop Marketplace</a></li>
                    <li><a href="https://www.shopscooponline.com/" target="_blank">Scoop Marketplace Online Shop</a></li>

                </ul>
-->
            </aside>
<!--
            <div class="under-footer">
            </div>
-->
            <footer>
                
            <div class="copyright">
                <p>Copyright 2019 - <?php
                            echo date('Y');
                            ?> | All Rights Reserved | <a href="index.php">Web Design by Gift</a></p>
                    
                    <ul>
                        <li>Copyright 2019 - <?php
                            echo date('Y');
                            ?>
                        </li>
                        <li>All Rights Reserved</li>
                        
                        <li><a href="index.php">Web Design by Gift</a></li>
                    </ul>

            </div> <!--end copyright-->
            </footer>
            
        </div> <!--End Wrapper--->
        
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

    </body>
</html>     

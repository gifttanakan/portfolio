<?php  

include('config.php'); 
include('includes/header.php');

?>
<main id="projects">
    <div>
        <h2 class="welcome">Projects</h2>
    </div> <!--End work section--->
    
<!---------------- by gallery --------------------->


<div class="gallery">
    <h3>By snapshots</h3> 
    <div class="gallery-body">
        <div class="tile1"> 
            <a href="scoopwix.php"><img src="images/scoop_home.png" alt="Scoop Marketplace" title="Scoop Marketplace"></a>
        </div>
        <div class="tile2">  
            
            <a href="scoopsquare.php"><img src="images/scoop_online_home.png" alt="Scoop Marketplace Online Shop" title="Scoop Marketplace Online Shop"></a>
        </div>
        <div class="tile3">  
            
            <a href="scoopwireframe.php"><img src="images/scoop_wire_1.png" alt="Scoop Homepage Wireframe" title="Scoop Homepage Wireframe"></a>
        </div>
        <div class="tile4">  
            
            <a href="zerowastenav.php"><img src="images/zero_snapshot.png" alt="Zero Waste Navigator Introduction" title="Zero Waste Navigator Introduction"></a>
        </div>
        <div class="tile5">  
            
            <a href="mindfulgiftguide.php"><img src="images/gift_home.png" alt="Guide: Mindful gifts for this holiday" title="Guide: Mindful gifts for this holiday"></a>
        </div>
        <div class="tile6">  
            
            <a href="artwireframe.php"><img src="images/artwire_snapshot.png" alt="The Diversity of Art Wireframe" title="The Diversity of Art Wireframe"></a>
        </div>
        <div class="tile7"> 
            
            <a href="diversityofart.php"><img src="images/art_snapshot.png" alt="The Diversity of Art" title="The Diversity of Art"></a>
        </div>
        <div class="tile8"> 
            
            <a href="thecraftminded.php"><img src="images/tcm_home.png" alt="The Craft Minded Blog" title="The Craft Minded Blog"></a>
        </div>
        <div class="tile9">  
            
            <a href="collegian.php"><img src="images/collegian_snapshot.png" alt="The Seattle Collegian" title="The Seattle Collegian"></a>
        </div>
        
        <div class="tile10">  
            
        </div>
    </div>
</div> <!--end gallery-->

<!-------------    cat nav -------------->
<div class="container">
    
    <div class="item project1">
        <div class="work_points">
            <h3>By projects</h3>
            <ul>
                <li>Current job
                    <ul>
                        <li><a href="collegian.php" id="project_link">The Seattle Collegian</a></li>
                    </ul>
                </li>
                <li>Startup</li>
                <ul>
                    <li><a href="scoopwix.php" id="project_link">Scoop Marketplace</a></li>
                    <li><a href="scoopsquare.php" id="project_link">Scoop Marketplace Online Shop</a></li>
                    <li><a href="scoopwireframe.php" id="project_link">Scoop Homepage Wireframe</a></li>

                </ul>
                <li>School projects</li>
                <ul>
                    <li><a href="zerowastenav.php" id="project_link">Zero Waste Navigator Introduction</a></li>
                    <li><a href="mindfulgiftguide.php" id="project_link">Guide: Mindful gifts for holidays</a></li>
                    <li><a href="diversityofart.php" id="project_link">The Diversity of Art</a></li>
                    <li><a href="artwireframe.php" id="project_link">The Diversity of Art Wireframe</a></li>
                </ul>
                <li>Personal</li>
                <ul>
                    <li><a href="thecraftminded.php" id="project_link">The Craft Minded Blog</a></li>
                </ul>

            </ul>
            
        </div> <!---end work_points-->
    </div> <!--end item-->

    <div class="item project2">
        <div class="work_points">
            <h3>By technology</h3>
            <ul>
                <li>Wireframing (wireframe.cc/lucidchart)</li>
                    <ul>
                        <!--                            <li><a href="scoopwireframe.php?browseCategory=by_tech">Scoop Homepage Wireframe</a></li>-->
                        <li><a href="scoopwireframe.php" id="project_link">Scoop Homepage Wireframe</a></li>
                        <li><a href="artwireframe.php" id="project_link">The Diversity of Art Wireframe</a></li>
                    </ul>
                
                <li>Web development (HTML/CSS/PHP/SQL)</li>
                <ul>
                    <li><a href="zerowastenav.php" id="project_link">Zero Waste Navigator Introduction</a></li>
                    <li><a href="mindfulgiftguide.php" id="project_link">Guide: Mindful gifts for this holiday</a></li>
                    <li><a href="diversityofart.php" id="project_link">The Diversity of Art</a></li>
                </ul>
                <li>WordPress</li>
                <ul>
                    <li><a href="thecraftminded.php" id="project_link">The Craft Minded Blog</a></li>
                    <li><a href="collegian.php" id="project_link">The Seattle Collegian</a></li>
                </ul>
                <li>Website builders (Wix/Square)</li>
                <ul>
                    <li><a href="scoopwix.php" id="project_link">Scoop Marketplace</a></li>
                    <li><a href="scoopsquare.php" id="project_link">Scoop Marketplace Online Shop</a></li>
                </ul>

            </ul>

        </div>
    </div> <!--end item-->
</div> <!--- end container-->


<!-------------    end cat nav -------------->

    <button type="button" class="button"><a href="scoopwireframe.php">Browse all</a></button>
</main>


<?php 
include('includes/footer.php');
?> 

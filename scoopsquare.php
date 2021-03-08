<?php  

include('config.php'); 
include('includes/header.php');

?>
<main id="projects">
    <div>
        <h2 class="welcome">Scoop Marketplace Online Shop</h2>
    </div> <!--End work section--->
    
<!------------breadcrumb----------->
    <ul class="breadcrumb">
        <li><a href="projects.php" id="project_link">Projects</a></li>
        <li><a href="scoopsquare.php" id="project_link">Scoop Marketplace Online Shop</a></li>
    </ul>
<!------------end breadcrumb----------->
    
    <div class="testimonials">
        <div class="test">

            <div class="work_img">
                <img src ="images/scoop_online_home.png" alt="Scoop Marketplace Online Shop Home Page">
            </div>

            <div class="work_points">
                <h3>Scoop Marketplace: E-commerce website for a small business</h3>
                <ul>
                    <li><strong>Store overview</strong>: Scoop Marketplace is a zero-waste grocery store orginally located in Seattle, now in Kirkland. The store lets customers bring their reusable containers to scoop package-free food, home goods, and personal care products in their desire amount. Packaged products are also available in compostable or reusable packaging.</li>
                    <li><strong>Project overview</strong>: Regarding the <a href="scoopwix.php" target="_blank" id="link">Scoop website on Wix</a>, this e-commerce website was built once the business provided online shopping. The website built on the Point of Sell system, Square, that Scoop was using to provide a better user experience than Wix online store and more robust workflow for the team.</li>
                    <li><strong>Technology</strong>: Square</li>
                    <li><strong>Year</strong>: 2019-2020</li>
                    <li><strong>Note</strong>: This website is no longer live. The business has had a website makeover with another e-commerce platform. Therefore, the domain name is redirected to the new website.</li>
                    <li><strong>Accomplishments</strong>: 
                        <ul>
                            <li>Layout design for online shopping page.</li>
                            <li>In-store product categories page.</li>
                            <li>In-store product list pages.</li>
                            <li>Custom HTML and CSS links that show other categories.</li>
                        </ul>
                    </li>

                </ul>
            </div>

            <div class="work_img">
                <img src ="images/scoop_online_shop.png" alt="Scoop Marketplace Online Shop">
            </div>

            <div class="work_points">
                <h3>Set up layout for online shopping page</h3>
            </div>

            <div class="work_img scroll">
                <img src ="images/scoop_instore_items.jpg" alt="Scoop Marketplace In-store item categories">
            </div>

            <div class="work_points">
                <h3>In-store product categories page (Scroll to view the whole page)</h3>
                <ul>
                <li><strong>Challenge</strong>: In-store bulk products availability couldn't be tracked precisely through Square's POS system. Therefore, I didn't pull categories information from the system to create this page.</li>
                <li><strong>Solution</strong>: I created the page manually from a custom page by using a template, adjusting content, and adding attributes accordingly.</li>
                </ul>

            </div>

            <div class="work_img scroll">
                <img src ="images/scoop_list_page.jpg" alt="Scoop Marketplace item list">
            </div>

            <div class="work_points">
                <h3>In-store products list page (Scroll to view the whole page)</h3>
                <ul>
                <li><strong>Challenge</strong>: This template doesn't have any side navigation, which is not helpful for users to browse other categories. The business may lose opportunity to keep user engagement.</li>
                <li><strong>Solution</strong>: Added custom HTML and CSS links to show other pages (categories) at the bottom of every product list page.</li>
                </ul>

            </div>

        </div> <!--end item-->

<!------------pagination------------>

<div class="pagination breadcrumb">
  <a href="scoopwix.php" id="project_link">&#10094; Previous</a>
  <a href="scoopwireframe.php" id="project_link">Next &#10095;</a>
</div>
        <!------------end pagination------------>

    </div> <!---end testimonials-->

</main>


<?php 
include('includes/footer.php');
?> 

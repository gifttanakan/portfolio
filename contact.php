<?php  

include('config.php'); 
include('includes/header.php');

?>

<?php 
// notification message

if(isset($_SESSION['success'])) : ?>
<div class="error success">
    <h3><?php
        echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?></h3>
</div>

<?php endif ?>

            <main>
                <div id="short-bio">
                <h2 class="welcome">Contact</h2>

                    <p>Send your questions or feedback about my services, past projects, or report bug through this form. I'll also be happy to connect with you on <a href="https://twitter.com/Gift_Tanakan" target="_blank" id="link">Twitter</a>, <a href="https://github.com/Gift-Tanakan" target="_blank" id="link">GitHub</a>, <a href="https://www.linkedin.com/in/gift-tanakan-homsaen-082210120/" target="_blank" id="link">LinkedIn</a>. And if you like this portfolio, have a read about how I craft it <a href="https://community.codenewbie.org/gift_tanakan/in-progress-portfolio-current-state-and-why-i-build-this-thing-from-scratch-22f2" target="_blank" id="link">here</a>.</p>
                </div>
                <div id="about-bio">
                    <?php include('includes/form.php'); ?>
                    
                </div>
                
                
            </main>
           
<?php 
    include('includes/footer.php');
    ?>
            

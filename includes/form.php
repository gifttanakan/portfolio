<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
        <label>First Name</label>
        <input type="text" name="firstName" value="<?php 
                                                   if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']); ?>">
        <span class="error"><?php echo $firstNameErr; ?></span>

        <label>Last Name</label>
        <input type="text" name="lastName" value="<?php 
                                                  if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']); ?>">
        <span class="error"><?php echo $lastNameErr; ?></span>

        <label>Email</label>
        <input type="email" name="email" value="<?php 
                                                if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
        <span class="error"><?php echo $emailErr; ?></span>

        <!--------------Medium---------------->
        
        <label>How did you hear about me?</label>
                
            <select name="medium">
                    <option value=""
                <?php if(isset($_POST['medium']) && $_POST == 'NULL') {
                echo 'selected = "unselected"';}?>>Select one</option>
                    
                <option value="LinkedIn"
                <?php if(isset($_POST['medium']) && $_POST['medium'] == 'LinkedIn') {
                echo 'selected = "selected"';}?>>LinkedIn</option> 
                
                <option value="Twitter"
                <?php if(isset($_POST['medium']) && $_POST['medium'] == 'Twitter') {
                echo 'selected = "selected"';}?>>Twitter</option> 
                
                <option value="GitHub"
                <?php if(isset($_POST['medium']) && $_POST['medium'] == 'GitHub') {
                echo 'selected = "selected"';}?>>GitHub</option> 
                
                <option value="CodeNewbie Community"
                <?php if(isset($_POST['medium']) && $_POST['medium'] == 'CodeNewbie Community') {
                echo 'selected = "selected"';}?>>CodeNewbie Community</option> 
                
                <option value="Facebook"
                <?php if(isset($_POST['medium']) && $_POST['medium'] == 'Facebook') {
                echo 'selected = "selected"';}?>>Facebook</option> 
                
                <option value="Search engines"
                <?php if(isset($_POST['medium']) && $_POST['medium'] == 'Search engines') {
                echo 'selected = "selected"';}?>>Search engines</option>
                
                <option value="Others"
                <?php if(isset($_POST['medium']) && $_POST['medium'] == 'Others') {
                echo 'selected = "selected"';}?>>Others</option>
                
            </select>
        
        <span class="error"><?php echo $medErr; ?></span>
        
        <!--------------End Medium---------------->
        
        <!--------------Topic of interest---------------->
        
        <label>What do you want to contact me about? (Choose the best fit)</label>
                
            <select name="topic">
                    <option value=""
                <?php if(isset($_POST['topic']) && $_POST == 'NULL') {
                echo 'selected = "unselected"';}?>>Select one</option>
                    
                <option value="My services"
                <?php if(isset($_POST['topic']) && $_POST['topic'] == 'My services') {
                echo 'selected = "selected"';}?>>My services</option> 
                
                <option value="My past work"
                <?php if(isset($_POST['topic']) && $_POST['topic'] == 'My past work') {
                echo 'selected = "selected"';}?>>My past work</option> 
                
                <option value="Potential Collaboration"
                <?php if(isset($_POST['topic']) && $_POST['topic'] == 'Potential Collaboration') {
                echo 'selected = "selected"';}?>>Potential Collaboration</option> 
                
                <option value="I'm not sure"
                <?php if(isset($_POST['topic']) && $_POST['topic'] == 'I\'m not sure') {
                echo 'selected = "selected"';}?>>I'm not sure</option> 
                
                <option value="Other"
                <?php if(isset($_POST['topic']) && $_POST['topic'] == 'Other') {
                echo 'selected = "selected"';}?>>Other</option> 
    
                
            </select>
        
        <span class="error"><?php echo $topErr; ?></span>
        
        <!--------------End Topic of interest---------------->
        

        <label>Comments/questions (Please be specipic if you can)</label>


        <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>

        <span class="error"><?php echo $commentsErr; ?></span>


        <input type="submit" value="Send it!">
        <p><a href="" id="link">Reset form</a></p>
    </fieldset>

</form>
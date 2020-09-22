  <?php 
  if(validation_errors())
    echo '<div class="error">'.validation_errors()."</div>";
  
   ?>
    <div class="content">
        <div class="LoginBox">

            <img class="avatarlog" src="<?php echo base_url();?>Style/images/Icons/EasyB.jpg" alt="LogIcon">
            <h1>Log in</h1>
            <form action="<?php echo site_url('CLogin/login');?>" method="POST">
                <!--Here the Username TexBox code-->
                <label for="Username">Username</label>
                <input type="text" placeholder="Enter Username" name="Username">

                <!--Here the Password TextBox-->
                <label for="Password">Password</label>
                <input type="password" placeholder="Enter Password" name="Password">

                <!--Here the Submit Button-->
                <input type="submit" Value="Submit"><br>

                <!-- Lose and create Account -->
                <a href="#">Lost Your Password?</a><br>
                <a href="#">Don't have an account?</a>
            </form>
        </div>
    </div>
</body>

</html>
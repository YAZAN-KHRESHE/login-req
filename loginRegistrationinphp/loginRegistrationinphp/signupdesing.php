<?php
    include 'header.php' ; 
?>


<!--  -->
<section class="vh-100">
    <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
        </div>

     





        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
    <!-- empty fiels -->
        <?php 
        
        if(isset($_GET['empty'])) {
            $message=$_GET['empty'] ; 
            $message="Plese fill in the blanks" ; 

        
        ?>
        <div class="alert alert-danger text-center" role="alert"> <?php  echo $message ; ?>  </div>
        <?php 
            }
        
        ?>
        <!--  -->

        <!-- invalid character  -->
        <?php 
        
        if(isset($_GET['invalid'])) {
            $message=$_GET['invalid'] ; 
            $message="invalid character" ; 

        
        ?>
        <div class="alert alert-danger text-center" role="alert"> <?php  echo $message ; ?>  </div>
        <?php 
            }
        
        ?>

        <!-- invalid email -->
        <?php 
            if(isset($_GET['Email'])){
                $message= $_GET['Email']; 
                $message="invalid email" ; 
            
        
        ?>
        <div class="alert alert-danger text-center" role="alert"> <?php  echo $message ; ?>  </div>
        <?php 
            }
        
        ?>
        <!-- the username is alredy in database -->
        <?php 
        
        if(isset($_GET['User'])) {
            $message=$_GET['User'] ; 
            $message="user already taken" ; 

        
        ?>
        <div class="alert alert-danger text-center" role="alert"> <?php  echo $message ; ?>  </div>
        <?php 
            }
        
        ?>
        <!--  -->

        <!-- the email is alredy in database  -->
        

        <?php 
        
        if(isset($_GET['Emaill'])) {
            $message=$_GET['Emaill'] ; 
            $message="Email already taken" ; 

        
        ?>
        <div class="alert alert-danger text-center" role="alert"> <?php  echo $message ; ?>  </div>
        <?php 
            }
        
        ?>
        <!--  -->
        

        <?php 
        
        if(isset($_GET['success'])) {
            $message=$_GET['success'] ; 
            $message="you have successfully sign up" ; 

        
        ?>
        <div class="alert alert-success text-center" role="alert"> <?php  echo $message ; ?>  </div>
        <?php 
            }
        
        ?>
    



        <div class=" text-primary bt-5"  >
            <h3 class="text-center py-2 fw-bold text-decoration-underline" > signup form </h3>
        </div>
        <form action="includes/signup.php" method="POST">

        <!-- first name -->
        <div class="form-outline my-3">
            <input type="text" name="Fname"  class="form-control form-control-lg" placeholder="First NAME" />
        </div>
        <!-- last name -->
        <div class="form-outline mb-3">
            <input type="text" name="Lname"   class="form-control form-control-lg" placeholder="Last NAME" />
        </div>
        <!-- Email input -->
        <div class="form-outline mb-3">
            <input type="email" name="Email"  id="form1Example13" class="form-control form-control-lg" placeholder="Email" />
        </div>
        <!-- user name -->
        <div class="form-outline mb-3">
            <input type="text" name="Username"  class="form-control form-control-lg" placeholder="User name" />
        </div>

        <!-- Password input -->
        <div class="form-outline mb-3">
            <input type="password" name="password"  id="form1Example23" class="form-control form-control-lg"  placeholder="Password"/>
        </div>

        <div class="d-flex justify-content-around align-items-center mb-4">
        
    
        <!-- Submit button -->
        <button type="submit" name="signup" class="btn btn-primary btn-lg btn-block">Signup</button>

        

        </form>
            </div>
        </div>
    </div>
</section>
<!--  -->

<?php
    include 'footer.php' ; 
?>
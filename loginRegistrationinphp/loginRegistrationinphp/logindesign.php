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

        <!-- is empty -->
        <?php  
        if(isset($_GET['empty'])){
            $Msg=$_GET['empty'];
            $Msg = "please fill in the blanks"; 
        ?>

            <div class="alert alert-danger text-center" role="alert"> <?php echo $Msg ;  ?> </div>
            <?php 
                }
            ?>
            <!-- is user name or email is invalid -->
            <?php  
        if(isset($_GET['invalid'])){
            $Msg=$_GET['invalid'];
            $Msg = "invalid user"; 
        ?>

            <div class="alert alert-danger text-center" role="alert"> <?php echo $Msg ;  ?> </div>
            <?php 
                }
            ?> 
            <!-- pass invalid -->
            <?php  
        if(isset($_GET['pass_invalid'])){
            $Msg=$_GET['pass_invalid'];
            $Msg = "invalid password"; 
        ?>

            <div class="alert alert-danger text-center" role="alert"> <?php echo $Msg ;  ?> </div>
            <?php 
                }
            ?> 
            <!--  -->
        
        

        <form action="includes/login.php" method="POST">
        <!-- Email input -->
        <div class="form-outline my-4">

            <input type="email" id="form1Example13" name="Username" class="form-control form-control-lg" placeholder="Enter User Name of Email" />
            <label class="form-label" for="form1Example13"  >Email address</label>

        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">

            <input type="password" name="password" id="form1Example23" class="form-control form-control-lg"  placeholder="Enter Your Password"/>
            <label class="form-label" for="form1Example23">Password</label>

        </div>

        <div class="d-flex justify-content-around align-items-center mb-4">
        
    
        <!-- Submit button -->
        <button type="submit" name="login" class="btn btn-primary btn-lg btn-block">login</button>

        

        </form>
            </div>
        </div>
    </div>
</section>
<!--  -->

<?php
    include 'footer.php' ; 
?>
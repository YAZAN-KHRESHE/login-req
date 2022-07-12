<?php 

include 'header.php' ; 

if(isset($_GET['well'])){

    if(($_SESSION['U_D']))
        {
    echo "<div class='display-4 text-center'> your have sussccesfully logged in  </div>" ; 

        }
else{
    
}

                        }   
else{

header("location: logindesign.php"); 
    exit();
}


include 'footer.php' ; 

?>
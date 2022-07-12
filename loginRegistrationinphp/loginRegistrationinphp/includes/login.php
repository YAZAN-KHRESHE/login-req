<?php  
session_start();
include 'connection.php' ; 

if(isset($_POST['login'])) {

    if(empty($_POST['Username']) || empty($_POST['password']) ){

        header("location: ../logindesign.php?empty"); 
        exit(); 

    }else{

        $Username=mysqli_real_escape_string($con,$_POST['Username']);
        $password=mysqli_real_escape_string($con,$_POST['password']);

        $query="select * from userlogin where Username= '".$Username."' or Email='".$Username."' ";
        $result= mysqli_query($con,$query) ; 

        if($row=mysqli_fetch_assoc($result)) {
            $hashpass = password_verify($password,$row['password']);

            if($hashpass==false){
                header("location: ../logindesign.php?pass_invalid"); 
                exit();
            }
            elseif($hashpass==true) {

                $_SESSION['U_D'] = $row['ID'];
                $_SESSION['Fname'] = $row['Fname'];
                $_SESSION['Lname'] = $row['Lname'];
                $_SESSION['Email'] = $row['Email'];
                $_SESSION['Username'] = $row['Username'];
                $_SESSION['password'] = $row['password'];

                header("location: ../account.php?well"); 
                exit();
            }


            
        }
        else{
            header("location: ../logindesign.php?invalid"); 
            exit();
        }
    }

}

else{

    header("location: ../logindesign.php"); 
    exit();

}

?>
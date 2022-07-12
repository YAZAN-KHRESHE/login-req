<?php  

include 'connection.php' ; 

if(isset($_POST['signup'])) {


if(empty($_POST['Fname']) || empty($_POST['Lname']) || empty($_POST['Email']) || empty($_POST['Username']) ||  empty($_POST['password']) )
{

header("location: ../signupdesing.php?empty") ;

}
else{

    $Fname = mysqli_real_escape_string($con,$_POST['Fname']) ; 
    $Lname = mysqli_real_escape_string($con,$_POST['Lname']) ; 
    $Email = mysqli_real_escape_string($con,$_POST['Email']) ; 
    $Username = mysqli_real_escape_string($con,$_POST['Username']) ; 
    $password = mysqli_real_escape_string($con,$_POST['password']) ; 

    if(!preg_match("/^[a-zA-Z]*$/",$Fname) || !preg_match("/^[a-zA-Z]*$/",$Lname) ){

        header("location: ../signupdesing.php?invalid");
        exit();
    } 
    else{
        if(!filter_var($Email,FILTER_VALIDATE_EMAIL)) {
            header("location: ../signupdesing.php?Email") ; 
            exit();

        }
        else{

            $query = " select * from userlogin where Username=' ". $Username."' ";
            $result= mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result)){
                header("location: ../signupdesing.php?User") ; 
                exit();

            }
            else{
                $query= "select * from Userlogin where Email= '".$Email."'    ";
                $result=mysqli_query($con,$query);

                if(mysqli_fetch_assoc($result)) {

                    header("location: ../signupdesing.php?Emaill") ; 
                    exit();
                }
                else{

                    $hash = password_hash($password,PASSWORD_DEFAULT);
                    $query=" insert into Userlogin (Fname,Lname,Email,Username,password) values('$Fname','$Lname','$Email','$Username','$hash') " ; 
                    $result=mysqli_query($con,$query); 
                    header("location: ../signupdesing.php?success") ; 
                    exit();
                    
                }
            }
        }
    }
}

}
else{
    header("location: ../index.php") ;
    exit();

}


?>
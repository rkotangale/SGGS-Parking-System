<?php
include("config.php");
    if(isset($_POST['register'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        

        $result=mysqli_query($db_data,"INSERT into reg_user values('','$firstname','$lastname','$email','$password','$cpassword')");

        if($result){
            header("location:signup.php");
        }
        else{
            echo "Failed";
        }
    }
?>  
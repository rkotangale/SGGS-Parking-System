<?php
include("config.php");
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $vname=$_POST['vname'];
        $vnumber=$_POST['vnumber'];
        $entry=$_POST['entry'];
        $exit=$_POST['exit'];
        

        $result=mysqli_query($db_data,"INSERT into vehicle_data values('','$name','$vname','$vnumber','$entry','$exit')");

        if($result){
            header("location:regi_vehicle.php");
        }
        else{
            echo "Failed";
        }
    }
?>    
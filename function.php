<?php
    include("config.php");
    $ids = $_GET['id'];

    $showquery = "select * from parked where id={$ids}";

    $showdata = mysqli_query($conn,$showquery);

    $arrdata = mysqli_fetch_array($showdata);

    if(isset($_POST['enter'])){
        $name = $_POST['name'];    
        $vtype = $_POST['vtype'];
        $vnumber = $_POST['vnumber'];

        $sql = mysqli_query($conn,"INSERT INTO parked (name,vtype,vnumber) VALUES ('$name','$vtype','$vnumber')") ;

        if ($sql) {
            header('location: form.php');
        } else {
            echo "Something was wrong";
        }
    }

    
?>
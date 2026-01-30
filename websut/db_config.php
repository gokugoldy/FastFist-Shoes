<?php
    session_start();
    $con = mysqli_connect("localhost" , "root" , "" , "db_shoe");
    if(!$con){
        echo die(mysqli_error($con));
    }
?>
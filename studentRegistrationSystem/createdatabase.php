<?php

    $host="localhost";
        $user="root";
        $password="";
        $database="student_registration_sys";

        // create main database 

        $con = mysqli_connect($host,$user,$password) or die('Unable to connect mysql' . mysql_error($con));
        $sql = "CREATE DATABASE student_registration_sys"; 
        mysqli_query($con,$sql);

        if(!$con){
            die('Could not connect: ' . mysqli_error());
        }
        else{
            echo "Database connected successfully!";
        }

        mysqli_close($con);
?>
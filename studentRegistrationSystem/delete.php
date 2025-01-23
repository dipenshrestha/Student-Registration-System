<?php

$servername = 'sql200.infinityfree.com';
$username ='if0_38160293';
$password ='L0GmvkSsfG1p';
$database ='if0_38160293_studentregistrationsystem';
    $con = mysqli_connect($servername,$username,$password,$database);
    if(!$con){
        die('Could not Connect My Sql:' .mysql_error($con));
    }

    $id = $_GET ['id'];
    $sql = "DELETE FROM `student` where StudentID = $id";  
    $result= mysqli_query($con, $sql);

    $sql = "DELETE FROM `qualification` where StudentID = $id";  
    $result= mysqli_query($con, $sql);

    if($result){
        header("location:details.php");
    }
    else{
        echo "deletion unsuccess".mysqli_error($con);
    }
?>
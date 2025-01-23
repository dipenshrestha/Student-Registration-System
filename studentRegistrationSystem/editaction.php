<?php
    $servername = 'sql200.infinityfree.com';
    $username ='if0_38160293';
    $password ='L0GmvkSsfG1p';
    $database ='if0_38160293_studentregistrationsystem';
    $con = mysqli_connect($servername,$username,$password,$database);
    if(!$con){
        die('Could not Connect My Sql:' .mysql_error($con));
    }
    $id = $_POST['id'];
    $f_name = $_POST['f_name'];
    $m_name = $_POST['m_name'];
    $l_name = $_POST['l_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $p_num = $_POST['p_num'];
    $email = $_POST['email'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    //variable for address
    $p_address = $_POST['p_address'];
    $t_address = $_POST['t_address'];
    //variable for qualifications
    //variable for xii
    $xii_percentage = $_POST['xii_percentage'];
    $xii_year = $_POST['xii_year'];
    //variable for x 
    $x_percentage = $_POST['x_percentage'];
    $x_year = $_POST['x_year'];

    $sql = "UPDATE `student` SET `FirstName`='$f_name',`MiddleName`='$m_name',`LastName`='$l_name',`DateOfBirth`='$dob',`Gender`='$gender',`PhoneNumber`='$p_num',`Email`='$email',`PermanentAddress`='$p_address',`TemporaryAddress`='$t_address',`FatherName`='$father_name',`MotherName`='$mother_name' WHERE StudentId=$id";

    $result = mysqli_query($con,$sql);
    if($result){
        $sql = "UPDATE `qualification` SET `Email`='$email',`Class-X percentage/grade`='$x_percentage',`Class-X passing year`='$x_year',`Class-Xii percentage/grade`='$xii_percentage',`Class-Xii passing year`='$xii_year' WHERE StudentId=$id";
        $result = mysqli_query($con,$sql);
        if($result){
            header('location:details.php');
        } 
    }

?>
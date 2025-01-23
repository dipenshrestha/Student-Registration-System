<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
        $servername = 'sql200.infinityfree.com';
        $username ='if0_38160293';
        $password ='L0GmvkSsfG1p';
        $database ='if0_38160293_studentregistrationsystem';
        $con = mysqli_connect($servername,$username,$password,$database);
        if(!$con){
            die('Could not Connect My Sql:');
        }

        if(isset($_POST['sub1']))
        {	
            // variable for student 
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
            
            //inserting in student table
	        $sql = "INSERT INTO `student`(`FirstName`, `MiddleName`, `LastName`, `DateOfBirth`, `Gender`, `PhoneNumber`, `Email`, `PermanentAddress`, `TemporaryAddress`, `FatherName`, `MotherName`) VALUES ('$f_name','$m_name','$l_name','$dob','$gender','$p_num','$email','$p_address','$t_address','$father_name','$mother_name')";

	        if (mysqli_query($con, $sql)) {
                $sql = "INSERT INTO `qualification`(`Email`, `Class-X percentage/grade`, `Class-X passing year`, `Class-Xii percentage/grade`, `Class-Xii passing year`) VALUES ('$email','$x_percentage','$x_year','$xii_percentage','$xii_year')";

                if (mysqli_query($con, $sql)) {
                    $success = 'true';
                    header('location:registrationForm.php?success='.$success);
                }else {
                    $success = 'false';
                    header('location:registrationForm.php?success='.$success);
                }
            }else {
                $success = 'false';
                header('location:registrationForm.php?success='.$success);
		        // echo "Error: " . mysqli_error($con);
	        }
	    mysqli_close($con);
        }
    ?>
</body>
</html>
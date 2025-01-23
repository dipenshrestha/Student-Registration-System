<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration System</title>
    <!-- css link -->
    <link rel="stylesheet" href="styles.css">

    <!-- link favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!--link to font awesome-->
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: 12px;
            text-align: center;
            margin-right: 20px;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
            padding: 30px;
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid #c0c0c0;
        }
 
        th,
        td {
            font-weight: bold;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }

        #u{
            padding: 10px;
            background-color: #006600;
            border: 1px #006600 solid;
            border-radius: 10px;
            color: white;
            margin-bottom: 10px;
        }

        #d{
            padding: 10px 15px 10px 10px;
            background-color: red;
            border: 1px red solid;
            border-radius: 10px;
            color: white;
        }

    </style>
</head>
<body>
    <div id="container">
        <div id="headContainer">
            <div id="bulb">
                <img src="images/bulb.png" width="150px">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="registrationForm.php"><i class="fa fa-file-text-o"></i> Register</a></li>
                    <li class="active"><a href="details.php"><i class="fa fa-search"></i> Registered Details</a></li>
                    <li><a href="aboutUs.php"><i class="fa fa-question-circle"></i> About us</a></li>

                    <!--code of drop down menu-->
			        <li class="drop-menu"><a href="#"><i class="fa fa-bars"></i></a>
                        <ul class="drop-down">
                            <li><a href="aboutAdmin.php"><i class="fa fa-question-circle"></i>  About Admin</a></li>
                            <li><a href="adminMessage.php"><i class="fa fa-envelope"></i>  Admin Message</a></li>
                            <li><a href="sendMessage.php"><i class="fa fa-comment"></i>  Send Message</a></li>
                        </ul>
			        </li>
                </ul>
            </nav>
        </div>

        <div id="detail-container-outer">
            <h1>Student Details Table</h1>
            <table>
                <tr style="background-color: #c0c0c0">
                    <th rowspan="3">First Name</th>
                    <th rowspan="3">Middle Name</th>
                    <th rowspan="3">Last Name</th>
                    <th rowspan="3">Date of Birth</th>
                    <th rowspan="3"> Gender</th>
                    <th rowspan="3">Phone number</th>
                    <th rowspan="3">Email</th>
                    <th colspan="2">Address</th>
                    <th colspan="2">Parents Name</th>
                    <th colspan="4">Qualification</th>
                    <th rowspan="3">Action</th>
                </tr>
                <tr style="background-color: #d3d3d3">
                    <th rowspan="2">Permanent</th>
                    <th rowspan="2">Temporary</th>
                    <th rowspan="2">Father Name</th>
                    <th rowspan="2">Mother Name</th>
                    <th colspan="2">Class X</th>
                    <th colspan="2">Class XII</th>
                </tr>
                <tr style="background-color: #e3e3e3">
                    <th>Grade/Percentage</th>
                    <th>Pass year</th>
                    <th>Grade/Percentage</th>
                    <th>Pass year</th>
                </tr>

                <?php
                $servername = 'sql200.infinityfree.com';
                $username ='if0_38160293';
                $password ='L0GmvkSsfG1p';
                $database ='if0_38160293_studentregistrationsystem';
                $con = mysqli_connect($servername,$username,$password,$database);
                if(!$con){
                    die('Could not Connect My Sql:' .mysql_error($con));
                }

                // $sql = "SELECT `s.FirstName`, `s.MiddleName`, `s.LastName`, `s.DateOfBirth`, `s.Gender`, `s.PhoneNumber`, `s.Email`, `s.PermanentAddress`, `s.TemporaryAddress`, `s.FatherName`, `s.MotherName`, `q.Email` , `q.Class-X percentage/grade`, `q.Class-X year`, `q.Class-Xii percentage/grade`, `q.Class-Xii year` FROM `student` as `s`, `qualification` as `q` where s.Email = q.Email";

                // $sql = "SELECT `FirstName`, `MiddleName`, `LastName`, `DateOfBirth`, `Gender`, `PhoneNumber`, `Email`, `PermanentAddress`, `TemporaryAddress`, `FatherName`, `MotherName` FROM `student`";


                //join operation
                // $sql = "SELECT `s.FirstName`, `s.MiddleName`, `s.LastName`, `s.DateOfBirth`, `s.Gender`, `s.PhoneNumber`, `s.Email`, `s.PermanentAddress`, `s.TemporaryAddress`, `s.FatherName`, `s.MotherName` FROM `student` as s INNER JOIN `qualification` as `q` ON s.StudentID=q.StudentIDID;";


                $sql = "SELECT * FROM student, qualification where student.Email = qualification.Email";

                $result = mysqli_query($con,$sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['StudentID'];
                        $f_name = $row['FirstName'];
                        $m_name = $row['MiddleName'];
                        $l_name = $row['LastName'];
                        $dob = $row['DateOfBirth'];
                        $gender = $row['Gender'];
                        $p_num = $row['PhoneNumber'];
                        $email = $row['Email'];
                        $father_name = $row['FatherName'];
                        $mother_name = $row['MotherName'];
                        //variable for address
                        $p_address = $row['PermanentAddress'];
                        $t_address = $row['TemporaryAddress'];
                        //variable for qualifications
                        //variable for x 
                        $x_percentage = $row['Class-X percentage/grade'];
                        $x_year = $row['Class-X passing year'];
                        //variable for xii
                        $xii_percentage = $row['Class-Xii percentage/grade'];
                        $xii_year = $row['Class-Xii passing year'];
                ?>
                        <tr>
                            <td><?php echo $f_name?></td>
                            <td><?php echo $m_name?></td>
                            <td><?php echo $l_name?></td>
                            <td><?php echo $dob?></td>
                            <td><?php echo $gender?></td>
                            <td><?php echo $p_num?></td>
                            <td><?php echo $email?></td>
                            <td><?php echo $p_address?></td>
                            <td><?php echo $t_address?></td>
                            <td><?php echo $father_name?></td>
                            <td><?php echo $mother_name?></td>
                            <td><?php echo $x_percentage?></td>
                            <td><?php echo $x_year?></td>
                            <td><?php echo $xii_percentage?></</td>
                            <td><?php echo $xii_year?></td>
                            <td>
                            <a href="edit.php?id=<?php echo $id?>"><input type="button" value="Update" id="u"></a>
                            <a href="delete.php?id=<?php echo $id?>"><input type="button" value="Delete" id="d"></a>
                            </td>
                        </tr>

                        <?php
                        
                    }
                }
            ?>
            </table>
        </div>
        <div id="footerr" style="margin-top:200px">
            <footer>
                    <div class="iconn">
                        <ul class="icon">
                            <li><a href="https:\\www.facebook.com" title="facebook"   style="background-color:#3b5998">
                            <i class="fa fa-facebook"></i></a></li>
                            <li><a href="https:\\www.instagram.com" title="instagram"   style="background-color:#b30086">
                            <i class="fa fa-instagram "></i></a></li>
                            <li><a href="https:\\www.twitter.com" title="twitter"   style="background-color:#00aced">
                            <i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>

                    <div id="copyf1">
                        <i class="fa fa-copyright"></i> &nbsp; FAFFL - 2022 All rights reserved 
                    </div>

                    <div class="quicknav">
                        <ul id="quicknavi">
                            <li><a href="index.php"> Home</a></li>
                            <li><a href="registrationForm.php"> Register</a></li>
                            <li class="active"><a href="details.php"> Registered Details</a></li>
                            <li><a href="aboutUs.php"> About us</a></li>
                            <li><a href="aboutAdmin.php"> About Admin</a></li>
                            <li><a href="adminMessage.php">  Admin Message</a></li>
                            <li><a href="sendMessage.php">  Send Message</a></li>
                        </ul>
                    </div>
            </footer>
        </div>
    </div>
</body>
</html>
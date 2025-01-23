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

    <script>
     function required()  
      {  
        var empt = document.forms["me_validate"]["f_name"].value;  
        if (empt == "")  
         {  
           alert("Please fill out the vendor email field");  
            return false;
         }  
          return (true);

      }  

 </script>
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
                    <li class="active"><a href="registrationForm.php"><i class="fa fa-file-text-o"></i> Register</a></li>
                    <li><a href="details.php"><i class="fa fa-search"></i> Registered Details</a></li>
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
        
        <div id="registration-container-outer">
            <div id="registration-container-inner">
                <form method="POST" name="me_validate" onsubmit="return required()" action="formphp.php">
                    <div id="registration-textfirst">
                        <h1>Student Registration Form</h1>
                    </div>
                    
                    <div id="registration-textsecond">
                        <h2 style="margin-top: -50px;">Student's Information</h2>
                    </div>
    
                    <div id="registration-n-student-outer">
                        <h2>Name of Student</h2><br>
                        <input type="text" placeholder="First Name" name="f_name" id="registration-n-student-inner" class="ns1" max=30 required>
                        <input type="text" placeholder="Middle Name" name="m_name" id="registration-n-student-inner" class="ns2" max=30>
                        <input type="text" placeholder="Last Name" name="l_name" id="registration-n-student-inner" class="ns3" max=30 required>
                    </div>
    
                    <div id="registration-dob-outer">
                        <h2>Date of Birth</h2><br>
                        <label for="datemaxmin"></label>
                        <input type="date" placeholder="MM/DD/YYYY" name="dob" id="registration-dob-inner" class="dob1" min="1979-01-01" max="2022-03-06" required>
                    </div>
                    
                    <div id="registration-gender-outer">
                        <h2>Gender</h2><br>
                        <div id="gender">
                            <div id="male">
                                <p><input type="radio" name="gender" value="male" required>  Male</p>
                            </div>
                            <div id="female">
                                <p><input type="radio" name="gender" value="female" required>  Female</p>
                            </div>
    
                            <div id="others">
                                <p><input type="radio" name="gender" value="other" required>  Others</p>
                            </div>
                        </div>
                    </div>
    
                    <div id="registration-pnum-and-email-outer">
                        <div id="registration-pnum-outer">
                            <h2>Phone Number</h2><br>
                            <input type="number" placeholder="e.g. 9810202020" name="p_num" size=10 max="9999999999" min="9000000000" id="registration-pnum-and-email-inner" class="registration-pnum-inner" required>
                        </div>
                        
                        <div id="registration-email-outer">
                            <h2>Email</h2><br>
                            <input type="email" placeholder="Enter Email id" name="email" id="registration-pnum-and-email-inner" required class="registration-email-inner">
                        </div>
                    </div>
    
                    <div id="registration-textsecond">
                        <h2>Parent's Information</h2>
                    </div>
    
                    <div id="registration-n-father-outer">
                        <h2>Father Name</h2><br>
                        <input type="text" placeholder="Father Name" name="father_name" id="registration-parent-inner" class="ns1" max=70 required>
                    </div>
    
                    <div id="registration-n-mother-outer">
                        <h2>Mother Name</h2><br>
                        <input type="text" placeholder="First Name" name="mother_name" id="registration-parent-inner" class="ns1" max=70 required>
                    </div>
    
                    <div id="registration-textsecond">
                        <h2>Student Address</h2>
                    </div>
    
                    <div id="registration-address-outer">
                        <div id="permanent_address">
                            <h2>Permanent Address</h2><br>
                            <input type="text" placeholder="Permanent Address" name="p_address" id="registration-address-inner" required>
                        </div>
    
                        <div id="temporary_address">
                            <h2>Temporary Address</h2><br>
                            <input type="text" placeholder="Temporary Address" name="t_address" id="registration-address-inner" required>
                        </div>
                    </div>
    
                    <div id="registration-textsecond">
                        <h2>Students Qualifications</h2>
                    </div>
    
                    <div id="qualification">
                        <table border="1px">
                            <tr>
                                <th id="table-title">S.N</th>
                                <th id="table-title">Level</th>
                                <th id="table-title">Percentage</th>
                                <th id="table-title">Year of passing in B.S.</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><input type="text" name="x_class" id="x" value="Class X" readonly style="font-size:large; padding: 20px 5px 20px 5px; border: 1px solid white; text-align: center;"></td>
                                <td><input type="text" name="x_percentage" id="percentage" required></td>
                                <td><input type="text" name="x_year" id="yearr" required></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><input type="text" name="xii_class" id="xii" value="Class XII" readonly style="font-size:large; padding: 20px 5px 20px 5px; border: 1px solid white; text-align: center;"></td>
                                <td><input type="text" name="xii_percentage" id="percentage" required></td>
                                <td><input type="text" name="xii_year" id="yearr" required></td>
                            </tr>
                        </table>
                    </div>
    
                    <!-- <div id="registration-textsecond">
                        <h2>Upload passport size photo</h2>
                        <input type="file" id="passport-size-photo" name="image">
                    </div> -->
    
                    <!-- <div id="registration-textsecond">
                        <h2>Upload digital signature</h2>
                        <input type="file" id="digitalsign-photo" name="digital_image">
                    </div> -->
    
                    <div id="buttons">
                        <br>
                        <div id="button1">
                            <button type="submit" value="Submit" id="form-buttons" class="form-b" name="sub1">Submit</button>
                        </div>
                        
                        <div id="button2">
                            <button type="reset" value="Reset" id="form-buttons" class="form-b">Reset</button>
                        </div>
                    </div>
    
                </form>
            </div>
        </div>

        <?php
        
        if(isset($_GET['success']) && $_GET['success']){
            echo '<script> confirm("Form Submitted Successfully")</script>';
            
        }
        elseif(isset($_GET['success']) && !$_GET['success']){
            echo '<script> confirm("Form submition Unuccessful")</script>';
        }
        ?>


        <div id="footerr">
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
                            <li  class="active"><a href="registrationForm.php"> Register</a></li>
                            <li><a href="details.php"> Registered Details</a></li>
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
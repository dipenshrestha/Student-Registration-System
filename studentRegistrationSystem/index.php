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
</head>
<body>
    <div id="container">
        <div id="headContainer">
        <div id="bulb">
                <img src="images/bulb.png" width="150px">
            </div>
            <nav>
                <ul>
                    <li class="active"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="registrationForm.php"><i class="fa fa-file-text-o"></i> Register</a></li>
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
        <div id="Content">
            <div id="darktheme">
                <img src="images/darkthemestudent.png" width="600px" id="firstimg">
            </div>
            
            <div id="text1">
                <h1 class="t1">Student Registration System</h1>
            </div>
        </div>

        <div id="content1">
            <div id="text2">
                <p class="t2">Catered to every needs</p>
                <br><hr class="line1">
            </div>
            
            <div id="cards">
                <div id="card1">
                    <p>
                        <h1>Register</h1><br><hr class="cardhr"><br>
                        <p>make the registration which includes the details of the students.</p>
                    </p>
                </div>

                <div id="card2">
                    <p>
                        <h1>Search</h1><br><hr class="cardhr"><br>
                        <p>using customizable registration system, easily search the details of the registered students.</p>
                    </p>
                </div>

                <div id="card3">
                    <p>
                        <h1>Modify / Delete</h1><br><hr class="cardhr"><br>
                        <p>can easily modify or delete the details of the students that are registered as per needs.</p>
                    </p>
                </div>
            </div>
            <div id="content2">
                <img src="images/bg1.jpg" width="50%" id="content2-img">
                <div id="content2-second">
                    <h1 id="content2-text">Get started<hr class="line1" style="margin-top: 10px; margin-left:100px;"></h1>
                    <a href="registrationForm.php"><input type="button" value="Register Now" id="content2-button"></a>
                </div>
            </div>
        </div>

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
                            <li class="active"><a href="index.php"> Home</a></li>
                            <li><a href="registrationForm.php"> Register</a></li>
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
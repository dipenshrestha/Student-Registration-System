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
                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="registrationForm.php"><i class="fa fa-file-text-o"></i> Register</a></li>
                    <li><a href="details.php"><i class="fa fa-search"></i> Registered Details</a></li>
                    <li><a href="aboutUs.php"><i class="fa fa-question-circle"></i> About us</a></li>

                    <!--code of drop down menu-->
			        <li class="drop-menu"><a href="#"><i class="fa fa-bars"></i></a>
                        <ul class="drop-down">
                            <li class="active"><a href="aboutAdmin.php"><i class="fa fa-question-circle"></i>  About Admin</a></li>
                            <li><a href="adminMessage.php"><i class="fa fa-envelope"></i>  Admin Message</a></li>
                            <li><a href="sendMessage.php"><i class="fa fa-comment"></i>  Send Message</a></li>
                        </ul>
			        </li>
                </ul>
            </nav>
        </div>

    <div class="container_outer">
        <div class="topic">  
            <b>About Admin</b>
        </div>
        <div id="container_admin">
            <div class="admins">
                <div class="image">
                    <img class="img" src="images/dipen.jpg">
                </div>
                <div class="card">
                    ID CARD
               </div>
                <div class="id">
                    <div class="topic_id">
                        <p>Name </p>
                        <p>Roll No.</p>
                        <p>Program &nbsp;&nbsp;</p>
                        <p>Level</p>
                    </div>
                    <div class="data_id"> 
                        <p>:&nbsp;Dipen Shrestha </p>
                        <p>:&nbsp;760313 </p>
                        <p>:&nbsp;Computer </p>
                        <p>:&nbsp;Bachelor </p>
                    </div>
                </div>
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
                        <i class="fa fa-copyright"></i> &nbsp; FABFL - 2022 All rights reserved 
                    </div>

                    <div class="quicknav">
                        <ul id="quicknavi">
                            <li><a href="index.php"> Home</a></li>
                            <li><a href="registrationForm.php"> Register</a></li>
                            <li><a href="details.php"> Registered Details</a></li>
                            <li><a href="aboutUs.php"> About us</a></li>
                            <li class="active"><a href="aboutAdmin.php"> About Admin</a></li>
                            <li><a href="adminMessage.php">  Admin Message</a></li>
                            <li><a href="sendMessage..php">  Send Message</a></li>
                        </ul>
                    </div>
            </footer>
        </div>
    </div>
</body>
</html>
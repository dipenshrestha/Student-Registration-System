<!DOCTYPE html>
<html lang="en">
<head>
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
                    <li><a href="details.php"><i class="fa fa-search"></i> Search</a></li>
                    <li><a href="aboutUs.php"><i class="fa fa-question-circle"></i> About us</a></li>

                    <!--code of drop down menu-->
			        <li class="drop-menu"><a href="#"><i class="fa fa-bars"></i></a>
                        <ul class="drop-down">
                            <li><a href="aboutAdmin.php"><i class="fa fa-question-circle"></i>  About Admin</a></li>
                            <li><a href="adminMessage.php"><i class="fa fa-envelope"></i>  Admin Message</a></li>
                            <li class="active"><a href="sendMessage.php"><i class="fa fa-comment"></i>  Send Message</a></li>
                        </ul>
			        </li>
                </ul>
            </nav>
        </div>

        <div id="feedback_form">
            <div id="feedback_image">
                <img id="feedbackimg"  src="images/feedback1.png">
            </div>
    
            <div id="form_div">
                <form method="Post" class="contact_form">
                    <div id="form_title"> 
                        <h1 align="center"> Drop Us A Feedback </h1><br/>
                    </div>
    
                    <div id="form_fullname">
                        <b><h3>Full Name: </h3></b>  <input type="text" class="name" id="form_box_fullname" placeholder="Enter your name " required>
                        <label id="form_label_fullname" > </label>
                    </div>
                    <br>
    
                    <div id="form_email">
                        <b><h3> Email:</h3></b>  <input type="text" id="form_box_email" class="email" placeholder="Enter your email" required>
                    </div>
                    <br>
    
                    <div id="form_choose">
                        <b> Is this your first visit to the website?</b><br>
                        <input type="radio" name="1" required>  Yes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="1">  No
                    </div>
                    <br>
    
                    <div id="form_thought">
                        <b>  What do you think of our website?<br> What would you like to share with us?</b>
                        <textarea name="textmsg" id="form_box_thought" placeholder="Your Thoughts" class="message" required ></textarea>
                    </div>
                    <br>
             
                    <div id="form_submit">
                        <center>
                            <button type="submit" name="submit" id="submit"  value="Send Feedback">Send Feedback</button>
                        </center>
                    </div>
                </form>
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
                            <li><a href="index.php"> Home</a></li>
                            <li><a href="registrationForm.php"> Register</a></li>
                            <li><a href="details.php"> Search</a></li>
                            <li><a href="aboutUs.php"> About us</a></li>
                            <li><a href="aboutAdmin.php"> About Admin</a></li>
                            <li><a href="adminMessage.php">  Admin Message</a></li>
                            <li class="active"><a href="sendMessage.php">  Send Message</a></li>
                        </ul>
                    </div>
            </footer>
        </div>
    </div>
</body>
</html>
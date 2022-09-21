<?php
require('config.php');
session_start();
if (isset($_REQUEST['email'])) {
    $first_name = stripslashes($_REQUEST['fname']);
    $first_name = mysqli_real_escape_string($conn, $fname);
    $last_name = stripslashes($_REQUEST['lname']);
    $last_name = mysqli_real_escape_string($conn, $lname);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, '$password');
    $confirm_password = stripslashes($_REQUEST['confirm_password']);
    $confirm_password = mysqli_real_escape_string($conn, $confirm_password);
    $town = stripslashes($_REQUEST['town']);
    $town = mysqli_real_escape_string($conn, $town);
    $postcode = stripslashes($_REQUEST['postcode']);
    $postcode = mysqli_real_escape_string($conn, $postcode);

        // Check user exists in the database
        $query    = "SELECT * FROM users WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;

            // Redirect to user dashboard page
            header("Location: welcome.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect email or password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
        } else {
        }
?>
<html>
    <head>
        <link rel="stylesheet" href="login.css">
    <title> Lydney Doctors Surgery </title>
    </head>
    <div id="header">
        <h2><a href="index.html">Lydney Practice</a></h2>
    </div>
    <div id="menu">
        <ul>
            <li><a href="practice-information.html">Practice Information</a></li>
            <li><a href="self-help.html">Self Help</a></li>
            <li><a href="general-enquiries.html">General Enquiries</a></li>
            <li><a href="myaccount.php">My Account</a></li>
        </ul>
    </div>
    <body style="text-align: center;">
        <div class="row">
            <div class="column1">
                <h4>Resources</h4>
              <dl>
                  <dt><a href="covid19-information.html">COVID-19 Information</a></dt>
                  <dt><a href="how-to-use-online-services.html">How to use our online services</a></dt> 
                  <dt><a href="treatment-room.html">Treatment Room</a></dt>
                  <dt><a href="administration-office">Administration Office</a></dt>
                  <dt><a href="news-and-updates.html">News and Updates</a></dt>
              </dl>
                  </div> <!-- end of column1-->
    <div class="column2">
            <h3>Login</h3>
            <p> Please login here.</p>
            <div class="container-sign-in">
                <p> Don't have an account? <a href="myaccount.php">Sign up here</a>.</p>
            </div>
            <form class="form" method="post" name="login" action=''>
                    <div class="col-75">
                        <input type="email" style="width: 40%;  padding: 12px; 
                        border: 1px solid cadetblue; border-radius: 4px; resize: vertical;" 
                        class="login-input" placeholder="Enter Email Address" name="email" required>
                    </div>
                    <div class="col-75">
                        <input type="password" class="login-input" placeholder="Create Password" name="password" required>
                    </div>
                <div class="row" align="center">
                    <button type="submit" class="registerbtn"><strong>Log in</strong></button>
                </div>
            </form>
            </div><!-- end of column2 -->
        <div class="column3">
      <h4>Quick Links</h4>
    <dl>
        <dt><a href="patient-registration-form.html">Patient Registration Form</a></dt>
        <dt><a href="myaccount.php">Register for Online Services</a></dt>
        <dt><a href="login.php">Already got an account? sign in to manage bookings!</a></dt>
        <dt><a href="how-to-use-online-services.html">How to use our online services</a></dt> 
    </dl>
    </div> <!-- end of column3 -->
    </div> <!-- end of row -->
    </body>
    <footer style="background-color: cadetblue; height:15%;">
        <p style="text-align: center; color:whitesmoke; padding-top:15px;">Copyright (c) 2022 
            <br> STU75425</p>
    </footer> 
    </html>
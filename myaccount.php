<html>
    <head>
        <link rel="stylesheet" href="account.css">
    <title> Lydney Doctors Surgery </title>
    </head>
    <div id="header">
        <h2><a href="index.html">Lydney Practice</a></h2>
    </div>
    <div id="menu" align="center">
        <ul>
            <li><a href="practice-information.html">Practice Information</a></li>
            <li><a href="self-help.html">Self Help</a></li>
            <li><a href="general-enquiries.html">General Enquiries</a></li>
            <li><a href="myaccount.php">My Account</a></li>
        </ul>
    </div>
    <body style="text-align:center;">
        <div class="row" color: darkslategray;">
        <div class="column1" style="background-color: cadetblue;">
                <h4 style="text-decoration: overline;">Resources</h4>
              <dl>
                <dt><a href="covid19-information.html">COVID-19 Information</a></dt>
                <dt><a href="treatment-room.html">Treatment Room</a></dt>
                <dt><a href="administration-office">Administration Office</a></dt>
                <dt><a href="news-and-updates.html">News and Updates</a></dt> 
              </dl>
                  </div> <!-- end of column1-->
        <div class="column2">
            <h3>Register Here</h3>
            <p> Please fill in the details to create an account with us.</p>
            <div class="container-sign-in">
                <p> Already have an account? <a href="login.php">Sign in here</a>.</p>
            </div>
            <?php
require('config.php');
// When form submitted, insert values into the database.
if (isset($_REQUEST['email'])) {
    $fname = stripslashes($_REQUEST['fname']);
    $fname = mysqli_real_escape_string($conn, $fname);
    $lname = stripslashes($_REQUEST['lname']);
    $lname = mysqli_real_escape_string($conn, $lname);
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
    $query = "INSERT into users (fname, lname, email, password, confirm_password, town, postcode)
             VALUES ('$fname', '$lname', '$email', '" . md5($password) . "', '" .md5($confirm_password) . "','$town', '$postcode')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("Location: welcome.php");
    }
    } else {
}
?>
            <form method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="email"><b>Name</b></label>
                    </div>
                    <div class="col-35">
                        <input type="text" placeholder="First" name="fname" required>
                    </div>
                    <div class="col-35">
                        <input type="text" placeholder="Last" name="lname" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label><b>Account Login</b></label>
                    </div>
                    <div class="col-75">
                        <input type="email" placeholder="Enter Email Address" name="email" align="right" required>
                    </div>
                    <div class="col-75">
                        <input type="password" placeholder="Create Password" name="password" required>
                    </div>
                    <div class="col-75">
                        <input type="password" placeholder="Confirm Password" name="confirm_password" required>
                    </div>
                </div>
                <div class="col-25"> 
                    <label for="repwd"><b>About you</b></label>
                </div>
                <div class="col-25">
                    <input type="text" placeholder="Town" name="town" required>
                </div>
                <div class="col-25">
                    <input type="text" placeholder="Postcode" name="postcode" required>
                </div>
                <div class="row" align="center">
                    <button type="submit" class="registerbtn"><strong>Register</strong></button>
                </div>
</div>
</form>
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
<html>
    <head>
        <link rel="stylesheet" href="appointment_process.css">
        <script type="text/javascript" src="appointment.js"></script>
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
    <div class="column2" style="background-color:white;">
    <br>
    <br>
    <?php
                require_once('dbappointments.php');
// When form submitted, insert values into the database.
if (isset($_REQUEST['fname'])) {
    $fname = stripslashes($_REQUEST['fname']);
    $fname = mysqli_real_escape_string($conn, $fname);
    $lname = stripslashes($_REQUEST['lname']);
    $lname = mysqli_real_escape_string($conn, $lname);
    $date = stripslashes($_REQUEST['date']);
    $date = mysqli_real_escape_string($conn, $date);
    $time = stripslashes($_REQUEST['time']);
    $time = mysqli_real_escape_string($conn, $time);

    $query = "INSERT into appointment_data (fname, lname, date, time)
             VALUES ('$fname', '$lname', '$date', '$time')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<h3> Congratulations, you have successfully registered!</h3>
        <p class='link'>Click <a href='welcome.php'>here</a> to go back to your account</p>";
    }
    } else {
    }
?>
              </div><!-- end of column 2 -->
          <div class="column3">
            <h4>Quick Links</h4>
          <dl>
              <dt><a href="patient-registration-form.html">Patient Registration Form</a></dt>
              <dt><a href="myaccount.php">Register for Online Services</a></dt>
              <dt><a href="login.php">Already got an account? sign in to manage bookings!</a></dt>
              <dt><a href="how-to-use-online-services.html">How to use our online services</a></dt> 
          </dl>
              </div> <!-- end of column3-->
          </div> <!-- end of row -->
                  </body>
    <footer style="background-color: cadetblue; height:15%;">
        <p style="text-align: center; color:whitesmoke; padding-top:15px;">Copyright (c) 2022 
            <br> STU75425</p>
    </footer> 
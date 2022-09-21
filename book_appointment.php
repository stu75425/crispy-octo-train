<?php
require('session.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="bookappointment.css">
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
            <p>Take a look at the calender below for appointment availability. 
                <br>The dates that have dots over are fully booked.</p>
            <form id="appointments" method="post" action="appointment_process.php">
                <div class="row">
                    <div class="col-25">
                        <label for="email"><b>Book an appointment below</b></label>
                    </div>
                    <div class="col-35">
                        <input type="text" placeholder="First" name="fname" required>
                        <span class="errorFeedback errorSpan" id="fnameError"></span>
                    </div>
                    <div class="col-35">
                        <input type="text" placeholder="Last" name="lname" required>
                        <span class="errorFeedback errorSpan" id="lnameError"></span>
                    </div>
                    <div class="col-75">
                        <select name="date">
                            <option>Select a date</option>
                            <option value="Monday 25th">Monday 25th</option>
                            <option value="Tuesday 26th">Tuesday 26th</option>
                            <option value="Wednesday 27th">Wednesday 27th</option>
                            <option value="Thursday 28th">Thursday 28th</option>
                            <option value="Friday 29th">Friday 29th</option>
                            <option value="Monday 3rd">Monday 3rd</option>
                            <option value="Tuesday 4th">Tuesday 4th</option>
                            <option value="Wednesday 5th">Wednesday 5th</option>
                            <option value="Thursday 6th">Thursday 6th</option>
                            <option value="Friday 7th">Friday 7th</option>
                            <option value="Monday 10th">Monday 10th</option>
                        </select>
                    </div>
                    <div class="col-75">
                    <select name="time">
                            <option>Select a time</option>
                            <option value="8:00">Monday 25th</option>
                            <option value="8:30">Tuesday 26th</option>
                            <option value="9:00">Wednesday 27th</option>
                            <option value="9:30">Thursday 28th</option>
                            <option value="10:00">Friday 29th</option>
                            <option value="10:30">Monday 3rd</option>
                            <option value="11:00">Tuesday 4th</option>
                            <option value="11:30">Wednesday 5th</option>
                            <option value="12:00">Thursday 6th</option>
                            <option value="12:30">Friday 7th</option>
                            <option value="13:00">Monday 10th</option>
                            <option value="13:30">Monday 3rd</option>
                            <option value="14:00">Tuesday 4th</option>
                            <option value="14:30">Wednesday 5th</option>
                            <option value="15:00">Thursday 6th</option>
                            <option value="15:30">Friday 7th</option>
                            <option value="16:00">Monday 10th</option>
                            <option value="16:30">Monday 3rd</option>
                            <option value="17:00">Tuesday 4th</option>
                            <option value="17:30">Wednesday 5th</option>
                        </select>
                    </div>
                </div>
                    <div class="row" align="center">
                    <button><strong>Book</strong></button>
                </div>
                </form>
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
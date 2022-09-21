<?php
require("db.connectappointment.php");
if (isset($_REQUEST['mobile'])) {
$fname = stripslashes($_REQUEST['fname']);
$fname = mysqli_real_escape_string($conn, $fname);
$lname = stripslashes($_REQUEST['lname']);
$lname = mysqli_real_escape_string($conn, $lname);
$mobile = stripslashes($_REQUEST['mobile']);
$mobile = mysqli_real_escape_string($conn, $mobile);
$appointment_date = stripslashes($_REQUEST['appoiintment_date']);
$appointment_date = mysqli_real_escape_string($conn, $appointment_date);
$appointment_time = stripslashes($_REQUEST['appoiintment_time']);
$appointment_time = mysqli_real_escape_string($conn, $appointment_time);
$query = "INSERT into booked_appointments(fname, lname, mobile, date_of_booking, time_of_booking)
       VALUES('$fname', '$lname', '$mobile', '$date_of_booking', '$time_of_booking')";
 $result = mysqli_query($conn, $query);
 if ($result) {
     echo "<div class='form'>
     <h3>Your appointment has been booked!</h3>
     <p class='link'>Click here to <a href='logout.php'>Logout</a></p>
     </div>";
 }
}
?>
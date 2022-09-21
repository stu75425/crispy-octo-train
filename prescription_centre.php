<?php
include('session.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="user-dashboard.css">
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
        <div class="row" style="color: darkslategray;">
            <div class="column1" style="background-color: cadetblue;">
                <h4 style="text-decoration: overline;">Resources</h4>
              <dl>
                  <dt><a href="covid19-information.html">COVID-19 Information</a></dt>
                  <dt><a href="treatment-room.html">Treatment Room</a></dt>
                  <dt><a href="administration-office">Administration Office</a></dt>
                  <dt><a href="news-and-updates.html">News and Updates</a></dt>
              </dl>
</div>
    <div class="column2" style="background-color:white;">
        <label id="lblGreetings"></label>
            <p style="font-weight: bold;">Welcome to the prescription Centre!</p>
            <p style="font-size:15px;">here you can order repeat prescriptions</p>
        
    </div> <!-- end of column2 -->
    <div class="column3" style="background-color: cadetblue;">
        <h4>Quick Links</h4>
        <dl>
         <dt><a href="prescription-repeat-form.pdf">Repeat prescription request form</a></dt>
         <dt><a href="how-to-use-online-services.pdf">How to use our online services</a></dt> 
        </dl>
    </div> <!-- end of column3 -->
    </div> <!-- end of row -->
                  </body>
    <Footer style="background-color: cadetblue; height:15%;">
        <p style="text-align: center; color:whitesmoke; padding-top:15px;">Copyright (c) 2022 
            <br> STU75425</p>
    </footer> 
<!-- Javaascript for greeting -->
<script>
    var myDate = new Date();
    var hrs = myDate.getHours();
 
    var greet;
 
    if (hrs < 12)
    greet = 'Good Morning';
    else if (hrs >= 12 && hrs <= 17)
    greet = 'Good Afternoon';
    else if (hrs >= 17 && hrs <= 24)
    greet = 'Good Evening';
    document.getElementById('lblGreetings').innerHTML = '<b><br>' + greet;
</script>
</html>
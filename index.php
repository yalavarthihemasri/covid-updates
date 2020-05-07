<?php
    include "ilogic.php";
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>COVID-19 UPDATES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="w3.css">
    <link rel="shortcut icon" type="image/png" href="images/2.jpg">
  </head>
  <body>
  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none;background:black;color:white;font-family: 'Roboto Slab', serif;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a class="w3-bar-item w3-button" href="index.php">HOME</a>
  <a class="w3-bar-item w3-button" href="countries.php">World Tracker</a>
  <a class="w3-bar-item w3-button" href="india.php">India Tracker</a>
  <a class="w3-bar-item w3-button" href="tzones.php">TS Zones</a>
  <a class="w3-bar-item w3-button" href="apzones.php">AP Zones</a>
  <a class="w3-bar-item w3-button" href="hosp.php">Hospitals</a>
  <a class="w3-bar-item w3-button" href="contacts.php">Emergency Contacts</a>
  <a class="w3-bar-item w3-button" href="noti.php">Notifications & advisories</a>
</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>COVID-19 Updates</h1>
  </div>
</div>

<img src="img_car.jpg" alt="Car" style="width:100%">

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

     
      <div class="x">
    <div class="container">
      <h2>COVID -19 Cases in India</h2>
      <div class="board">
        <div class="card a"><i class="fa fa-tachometer"></i><h5>Active Cases</h5><span id="active"><?php echo $total_active; ?></span></div>
        <div class="card ca"><i class="fa fa-th-list"></i><h5>Total Cases</h5><span id="cases"><?php echo $total_confirmed; ?></span></div>
        <div class="card cr"><i class="fa fa-times-circle"></i><h5>New Cases</h5><span id="critical"><?php echo $dailyconfirmed; ?></span></div>
        <div class="card d"><i class="fa fa-times"></i><h5>Total Deaths</h5><span id="death"><?php echo $total_deaths; ?></span></div>
        <div class="card r"><i class="fa fa-check-square-o"></i><h5>Recovered Cases</h5><span id="recovered"><?php echo $total_recovered; ?></span></div>
        <div class="card t"><i class="fa fa-eye"></i><h5>Today Recoveries</h5><span id="tests"><?php echo $dailyrecovered; ?></span></div>
      </div>
    </div>
</div>
  </body>
  
</html>


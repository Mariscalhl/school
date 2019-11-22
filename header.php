<?php 
	require('./includes/constants.php');
	//require('./includes/functions.php');
	require('./includes/db.php');
  ob_start();	//output buffer
  session_start(); //starts a session
  $message = ""; 
  if(isset($_SESSION['message'])){
	  $message = $_SESSION['message'];
  unset($_SESSION['message']);
  }
 ?>
 	<!--
		Name: Luis Mariscal
	-->
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>School Information System</title>
</head>
<body>
<!-- Header Starts -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">School Information System</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="./index.php">Home</a></li>
      <?php if($_SESSION['user']['user_type'] == 'S'){ ?>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Student Options <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="./student_dash.php">Dashboard</a></li>
          <li><a href="./student_grade.php">Grades</a></li>
          <li><a href="./settings.php">Settings</a></li>
        </ul>
      </li>
    <?php }else if(($_SESSION['user']['user_type'] == 'T')) {?>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Teacher Options <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="./teacher_dash.php">Dashboard</a></li>
          <li><a href="./classlist.php">Classlist</a></li>
          <li><a href="./grades.php">Class Grades</a></li>
        </ul>
      </li>
  <?php }?>
      <li><a href="programs_page.php">Programs</a></li>
      <li><a href="events.php">Events</a></li>
      <li><a href="about.php">About</a></li>
    </ul>

    <?php
    if(isset($_SESSION['user']))
    {
    ?>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="./logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
    <?php
    }
    else if(!isset($_SESSION['user'])){
    ?>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    <?php
    }
    ?>

  
  </div>
</nav>
 <div id="page-container">
   <div id="content-wrap">    
<!-- #Header ends -->
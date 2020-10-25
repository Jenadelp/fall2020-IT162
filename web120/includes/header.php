<?php include 'portal-config.php'?>
<!DOCTYPE html>
<html>
<head>
<title><?=$title?></title>
    
 <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,200&display=swap" rel="stylesheet">   
    
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&display=swap" rel="stylesheet">   

<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i> Jena Delp's SCC IT162 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
    <?=makeLinks($nav1)?>
      <!--<li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart/Layout</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Jena</a></li>-->
        
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
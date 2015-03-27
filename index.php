<?php

/**
 * About this project
 *
 * Index the uploads folder and display images on homepage.
 * Javascript drag and drop upload
 *
 * @category   PHP script
 * @package    Upload
 * @author     Andrey Danilkovich <adanilko@hawk.iit.edu>
 * @copyright  2015 MIT
 * @version    Release: 1.0
 * @link       github.com/andreydanil/
 */


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Awesome Feed</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="css/flat-ui.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" />

    <link rel="shortcut icon" href="img/favicon.ico">


	<link href="css/main.css" type="text/css" rel="stylesheet"/>
	</head>
<body>
	<style>
      body {
        min-height: 2000px;
      }

      .navbar-static-top {
        margin-bottom: 19px;
      }
    </style>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top inverted" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right">
          	<li class="active"><a href="index.php">Home</a></li>
            <li><a href="upload.php">Upload</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div class="container-fluid">
		<center>
		<h1>Awesome Feed</h1>
		<?php include 'includes/imageload.php' ?>
		</center>
	</dir>


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	
	
	<script src="js/dropzone.min.js"></script>
	<!-- jQuery (necessary for Flat UI's JavaScript plugins) -->
    <script src="js/vendor/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/vendor/video.js"></script>
    <script src="js/flat-ui.min.js"></script>
</body>
</html>
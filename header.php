<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

include_once "login/includes/init.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <!-- Title of the document -->
    <title>Water Trust</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Universe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <!-- /meta tags -->
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- /Owl Stylesheets -->
    <!-- gallery css -->
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <!-- font awesome css -->
    <link href="css/fontawesome-all.css" type="text/css" rel="stylesheet" media="all" />
    <!-- bootstrap css -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all" />
    <!-- custom css -->
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all" />
    <!-- Online google fonts -->
    <link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <!-- /Online google fonts -->
</head>

<body>
    <!-- banner -->
    <div class="banner">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="home.php">Water Trust</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item ml-xl-2">
                            <a class="nav-link scroll" href="#section2">About</a>
                        </li>
                        <li class="nav-item ml-xl-2">
                            <a class="nav-link scroll" href="#section1">Services</a>
                        </li>
                        <?php
                        if(logged_in()) {
  

?>
                        <li class="nav-item ml-xl-2">
                            <a class="nav-link scroll" href="logout.php">Logout</a>
                        </li>

                        <?php
                    }
                    ?>
                        <li class="nav-item ml-xl-2">
                            <a class="nav-link scroll" href="#section8">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
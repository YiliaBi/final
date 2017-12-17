<?php
session_start();
?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>




<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">IS601</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="https://web.njit.edu/~yb83/finalpro/index.php?page=tasks&action=all">Show All Tasks</a></li>
                <li><a href="https://web.njit.edu/~yb83/finalpro/index.php?page=accounts&action=all">Show All Accounts</a></li>

                <?php

                if(!isset($_SESSION['userID'])){
                    echo '<li><a href="https://web.njit.edu/~yb83/finalpro/index.php?page=accounts&action=register">Register</a></li>';
                }

                if(isset($_SESSION['userID'])){
                    echo '<li><a href="https://web.njit.edu/~yb83/finalpro/index.php?page=accounts&action=edit&id='.$_SESSION["userID"].'">Edit Account</a></li>';
                }
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="https://web.njit.edu/~yb83/finalpro/index.php?page=accounts&action=logout">Logout</a></li>
                </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<br/><br/>

<h1><php echo $_REQUEST["action"]; ?></h1>


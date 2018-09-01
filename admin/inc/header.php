<?php require_once("../includes/connection.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Icon css link -->
    <link rel="icon" href="img/logo.jpg" type="image/x-icon">

    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="themify-icon/themify-icons.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="
    /style.css" rel="stylesheet">
    <script src="ckeditor/ckeditor.js"></script>

    <title>Admin </title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-success bg-dark pb-1 pt-0">
        <span class="navbar-brand" href="#" style="color:blue;"><i class="ti-desktop"></i>&nbsp;Administrator</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="ti-menu-alt" style="color:dodgerblue"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ">
                <a class="nav-item nav-link " href="Index.php">Dashboard<span class="sr-only"></span></a>
                <a class="nav-item nav-link " href="user_bank_details.php">Bank Details</a>
                <a class="nav-item nav-link " href="transactions.php">Transactions</a>
                <a class="nav-item nav-link " href="Users.php">Members</a>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="#">Welcome Dani<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="login.php">Logout</a>
            </div>
        </div>
    </nav>
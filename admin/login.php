<?php
    $log = @$_POST['login'];
    $err="";
	if($log){
		if(isset($_POST["admin_login"]) && isset($_POST["password_login"])){
			$admin_login = $_POST["admin_login"];//preg_replace('#[^A-Za-z0-9]#i', '',  filter everything but members and letters
			$password_login = $_POST["password_login"];
			$sql = "SELECT * FROM `cmsusers` WHERE `email` = '$admin_login' AND  `password` = '$password_login' Limit 1";
            $sqli = mysqli_query($connect,$sql);
            if(!$sqli){
                die("Database connection failed");
            }
			//Check for their existence
			$userCount = mysqli_num_rows($sqli);//Count number of rows returned
			if($userCount == 1){
                $_SESSION["admin_login"] = $admin_login;
				$_SESSION["password_login"] = $password_login;
				$err = "
                    <div class='alert alert-success'>
                        <span class='ti-check'></span> Login Successful...<br>Redirecting
                        <span class='ti-face-smile'></span>
                    </div>                    
                ";
                session_start();
				
                echo "<meta http-equiv =\"refresh\" content=\"2; url = http://localhost/admincms/index.php\">";
			}
			else{
                $err = "
                    <div class='alert alert-danger'>
                        <span class='ti-face-sad'></span> The given Login details are incorrect!!, Please try again...
                    </div>                    
                ";
			}
	    }
    }
    
?>
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
    <title>Admin-login </title>
</head>


<body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg navbar-success bg-dark pb-1 pt-0">
        <a class="navbar-brand" href="#"><i class="ti-desktop"></i>&nbsp;Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="ti-menu-alt" style="color:dodgerblue"></span>
        </button>
    </nav>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-2">
                    <h1><span class="ti-align-right" aria-hidden="true"></span>&nbsp;Admin Area | Login</h1>
                </div>
            </div>
        </div>
    </header>



    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1"><br/>
                    <form id="login" action="" method="POST" class="card pl-2 pr-2 ">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input name="admin_login" type="text" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label>Passwords</label>
                            <input name="password_login" type="password" class="form-control" placeholder="Password">
                        </div>
                        <button name="login" value="log" type="submit" class="btn btn-info">Login</button>
                        <br/>
                        <?php echo $err; ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
    

<?php 
 include("inc/footer.php")
?>

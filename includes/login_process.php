<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection.php"); ?>

<?php include '../includes/header.php';?>

<?php
//if(isset($_POST['submit'])){
    $un= trim($_POST["username"]);
    $pw= trim($_POST["password"]);
    $hpw= md5($pw);

    $query = "SELECT * FROM user_details WHERE (username = '{$un}' OR email = '{$un}') AND password = '{$hpw}' LIMIT 1";
    $result= mysqli_query($connection,$query);
    if (!$result){
        die("Database connection failed ");
    }

    //Grabs ID of user to use for session
    while ($db=mysqli_fetch_row($result)){
        $user_id = $db[0];
        $username = $db[1];
    }

    $_SESSION['id'] = $user_id;
    $_SESSION['username'] = $username;
    // for the login
    if (mysqli_num_rows($result) == 1){
        //success
        header("Location: ../profile.php");
        exit;
    }else{
        //Failed
        echo '
            <div class="container">
                <div class="card text-center">
                    <div class="card text-center" style="padding-top:50px;">
                        <div class="card-header">
                            <h2>Something went wrong: Login Failed</h2>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title"></h1>
                            <p class="card-text"><strong>Reason: </strong>Wrong username or Password</p>
                            <p class="card-text">click here to go back to Login</p>
                            <a href="../login.php" class="btn btn-primary">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        ';
    }
//}else{
  //  return;
//}

?>

<?php require_once("../includes/close_connection.php");?>

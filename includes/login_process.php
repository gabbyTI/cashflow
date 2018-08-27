<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection.php"); ?>

<?php include '../includes/header.php';?>

<?php
//if(isset($_POST['submit'])){
    $un = trim($_POST["username"]);
    $pw = trim($_POST["password"]);
    $hpw = md5($pw);

    $query = $connection->query("SELECT * FROM user_details WHERE (username = '{$un}' OR email = '{$un}') AND password = '{$hpw}' LIMIT 1");
    
    if (!$query){
        die("Database connection failed ");
    }

    //Grabs ID of user to use for session
    while ($db=$query->fetch_row()){
        $user_id = $db[0];
        $username = $db[1];

        $_SESSION['id'] = $user_id;
        $_SESSION['username'] = $username;
    }

    // for the login
    if ($query->num_rows == 1){
        //success
        header("Location: ../profile.php");
        exit;
    }else{
        //Failed
        ?>
        <div class="container">
            <div class="card text-center">
                <div class="card text-center" style="padding-top:50px;">
                    <div id="errmsg" class="alert alert-danger">
                        <i class="fa fa-exclamation-triangle"></i>
                        <h4>Fatal Login Error</h4>
                    </div>
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
        <?php
    }
//}else{
  //  return;
//}
?>
<?php require_once("../includes/close_connection.php");?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#errmsg').delay(5000).fadeOut();
    });
</script>
<!-- unused for now
<script type="text/javascript">
    $(document).ready(function(){
        setInterval(function(){
            $('#').load('')
        }, 3000);
    });
</script>
-->

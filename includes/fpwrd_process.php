<?php require_once("session.php"); ?>

<?php include '../includes/header.php';?>
<?php
    $em = trim(@$_POST['email']); ## Assign user input for email to variable $em
    $mess2 = ""; ## Declare variable $mess2 as an empty string
    echo"<br /><br />";
    
    // Check if email exists        
    $user_check = $connection->query("SELECT * FROM `user_details` WHERE `email` = '$em'");
    $db = mysqli_num_rows($user_check);
    if ($db !== 1){
        ?>
        <div class="container">
            <div class="card text-center">
                <div class="card text-center" style="padding-top:50px;">
                    <div class="card-header">
                        <h2>Something went wrong: Password Restore Process Failed</h2>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title"></h1>
                        <p class="card-text"><strong>Reason: </strong> Email Is Not Registered on This Platform </p>
                        <p class="card-text">click here to go back to login</p>
                        <a href="../login.php" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        return;
    }

    $get = $user_check->fetch_row();
    $id = $get[0];

    $fp_check = $connection->query("SELECT * FROM `fpwrd` WHERE `email` = '$em'");
    $db = mysqli_num_rows($fp_check);
    if ($db == 1){
        ?>
        <div class="container">
            <div class="card text-center">
                <div class="card text-center" style="padding-top:50px;">
                    <div class="card-header">
                        <h2>Something went wrong: Password Restore Process Failed</h2>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title"></h1>
                        <p class="card-text"><strong>Reason: </strong> Email has already been inputted for confirmation </p>
                        <p class="card-text">click here to continue to password change page</p>
                        <a href="<?php echo "../sec.php?id=$id"; ?>" class="btn btn-primary">Change password</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        return;
    }
    
    $in_fpwrd = $connection->query("INSERT INTO `fpwrd` VALUES('', '$em')");
    ?>
    <div class="container">
        <div class="card text-center">
            <div class="card text-center" style="padding-top:50px;">
                <div class="card-header">
                    <div class="alert alert-success">
                        <h2>SUCCESS</h2>
                    </div>
                </div>
                <div class="card-body">
                    <h1 class="card-title"></h1>
                    <p class="card-text"><strong>
                    <i class="fa fa-check-circle"></i> Please Wait... <i class="fa fa-spinner fa-spin"></i>
                    <meta http-equiv ="refresh" content="4; url = <?php echo "sec.php?id=$id"; ?>">
                </div>
            </div>
        </div>
    </div>
    <?php

?>  
<?php require_once("../includes/close_connection.php");?>

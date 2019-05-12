<?php
    require 'includes/session.php';
    include 'includes/header.php';
    

    if ($user) {
        ?>
        <br /><br />
        <div class="offset-md-1 mt-5 col-md-10 alert alert-warning text-center animated flash">
            <i class="fa fa-exclamation-triangle"></i> 
            Please, Kindly <a class="" href="logout.php">LOGOUT</a> to view this page!!!
        </div>
        <?php
        exit();
    }
?>
        <br><br><br>
        <!--Main Body Starts-->
        <div class="container">
            <div class="card" style="padding: 30px">
                <b>Spincash - SIGN IN</b>
                <hr>
                <form method="post" action="includes/login_process.php">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" minlength="3" maxlength="10" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Username" required>
                    </div>
                
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" maxlength="15" minlength="5" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    <a href="forgot_password.php"> - Forgot Password</a>
                </form>
            </div>
        </div>
        <!--Mian body ends-->

        <hr>
<?php
    include 'includes/footer.php';
?>
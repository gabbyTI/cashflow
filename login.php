<?php
    include 'includes/header.php';
?>
        <br><br><br>
        <!--Main Body Starts-->
        <div class="container">
            <div class="card" style="padding: 30px">
                <b>Cashflow - SIGN IN</b>
                <hr>
                <form method="post" action="includes/login_process.php">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" minlength="3" maxlength="10" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Username or Email" required>
                    </div>
                
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" maxlength="15" minlength="5" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
            </div>
        </div>
        <!--Mian body ends-->

        <hr>
<?php
    include 'includes/footer.php';
?>
<?php
    include 'includes/header.php';
?>
        <br><br><br>
        <!--Main Body Starts-->
        <div class="container">
            <div class="card" style="padding: 30px">
                <b>Cashflow - Retrieve Password</b>
                <hr>
                <div class="alert alert-info">
                    <strong>After clicking submit a password reset link will be sent to your email</strong>
                </div>
                <form method="post" action="includes/login_process.php">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" minlength="3" maxlength="10" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Username or Email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <!--Mian body ends-->

        <hr>
<?php
    include 'includes/footer.php';
?>
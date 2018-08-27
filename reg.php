<?php include 'includes/header.php';
    if ($user) {
        # code...
        ?>
        <div class="container">
            <div class="card text-center">
                <div class="card text-center" style="padding-top:50px;">
                    <div class="card-header">
                        <h2>Please Logout to view this page</h2>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title"></h1>
                        <p class="card-text">click here to Logout</p>
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        exit();
    }
?>
        <br><br><br>
        <!--Main Body Starts-->
        <div class="container">
            <div class="card" style="padding: 30px">
                <b>Cashflow - SIGN UP</b>
                <hr>
                <form method="post" action="includes/reg_process.php">
                    <!--Username-->
                    <div class="form-group">
                        <label>Username<i class="text-primary">*</i></label>
                        <input type="text" minlength="3" maxlength="10" class="form-control" name="username" placeholder="Enter username" required>
                    </div>
                    <!--Email-->
                    <div class="form-group">
                        <label>Email address<i class="text-primary">*</i></label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <!--Phone No.-->
                    <div class="form-group">
                        <label>Phone No.<i class="text-primary">*</i></label>
                        <input type="tel" maxlength="11" minlength="10" class="form-control" name="phoneNumber" placeholder="Enter Phone Number" required>
                    </div>
                    <!--Password-->
                    <div class="form-group">
                        <label>Password<i class="text-primary">*</i></label>
                        <input type="password" maxlength="15" minlength="5" class="form-control"name="password" placeholder="Password" required>
                    </div>
                    <!--Confirm password-->
                    <div class="form-group">
                        <label>Confirm Password<i class="text-primary">*</i></label>
                        <input type="password" maxlength="15" minlength="5" class="form-control" name="confirmPassword" placeholder=" Confirm Password" required>
                    </div>
                    <!--Terms and condition-->
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="termsAndCondition" required>
                        <label class="form-check-label">I agree to all terms &amp; conditions</label>
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
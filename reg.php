<?php include 'includes/header.php';?>
        <br><br><br>
        <!--Main Body Starts-->
        <div class="container">
            <div class="card" style="padding: 30px">
                <b>Cashflow - SIGN UP <?php echo $_GET['ref']; ?></b>
                <hr>
                <form method="post" action="includes/reg_process.php">
                    <!--Username-->
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" minlength="3" maxlength="10" class="form-control" name="username" placeholder="Enter username" required>
                    </div>
                    <!--Email-->
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <!--Phone No.-->
                    <div class="form-group">
                        <label>Phone No.</label>
                        <input type="tel" maxlength="11" minlength="10" class="form-control" name="phoneNumber" placeholder="Enter Phone Number" required>
                    </div>
                    <!--Password-->
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" maxlength="15" minlength="5" class="form-control"name="password" placeholder="Password" required>
                    </div>
                    <!--Confirm password-->
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" maxlength="15" minlength="5" class="form-control" name="confirmPassword" placeholder=" Confirm Password" required>
                    </div>
                    <!--Terms and condition-->
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" name="termsAndCondition" required>
                        <label class="form-check-label">I agree to all terms &amp; conditions</label>
                    </div>
                    <button value="<?php echo $_GET['ref']?>" type="submit" name="register" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <!--Mian body ends-->

        <hr>
<?php
    include 'includes/footer.php';
?>
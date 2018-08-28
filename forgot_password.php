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
                    <strong>Answer your Security question in the next screen</strong>
                </div>
                <form method="post" action="includes/fpwrd_process.php">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Username or Email" required>
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
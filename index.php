<?php
    require 'includes/session.php';
    include 'includes/header.php';
?>
        <!--Main Body Starts--><br/><br/>
        <div class="container">
            <div class="card text-center">
                
                <div class="card-body">
                    <?php
                        if (!$user) {
                            # code...
                            ?>
                            <h5 class="card-title">Welcome to Spincash</h5>
                            <p class="card-text">Spincash is a very simple platform if you are looking to increase your profits every now and then, cash flow is very easy to use and simple to understand with its friendly user interface it is intended to provide not only quality service but a worthwhile user experience, click any of the link below to get started.</p>
                            <a href="login.php" class="btn btn-primary">Login</a>
                            <a href="reg.php" class="btn btn-primary">Register</a>
                            <?php
                        }
                        else{
                            ?>
                            <h5 class="card-title">Welcome to Spincash -- <?php echo $user; ?> --</h5>
                            <p class="card-text">Spincash is a very simple platform if you are looking to increase your profits every now and then, cash flow is very easy to use and simple to understand with its friendly user interface it is intended to provide not only quality service but a worthwhile user experience, click the links below to get continue.</p>
                            <a href="<?php echo "profile.php"; ?>" class="btn btn-success">Dashboard</a>
                            <a href="logout.php" class="btn btn-danger">Logout</a>
                            <?php
                        }
                    ?>
                </div>

                <div class="card-footer text-muted">
                    <i>Disclaimer - This platform does not serve as a place to get assured steady income as it is based on peer to peer donations - use your spare money</i>
                </div>
            </div>
            <hr>
            <div class="container p-0" style="font-weight: bold">
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="card bg-light mb-3 h-100">
                            <div class="card-header">HOW IT WORKS</div>
                            
                            <div class="card-body">
                                <!--<h5 class="card-title"></h5>-->
                                <p class="card-text">Once you have created an account with spincash you can follow the steps below to get 50% profit for any interest package you choose</p>
                                <hr>
                                <p>- Go to your dashboard and make a pay request <br> - You will be merged with who you are to pay within 24hrs <br> - Once your payment is confirmed you are legible to receive your initial payment with a 50% interest <br></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-2">
                        <div class="card bg-light mb-3 h-100">
                            <div class="card-header">CUSTOMER CARE SERVICE</div>
                            <div class="card-body">
                                <!--<h5 class="card-title">Light card title</h5>-->
                                <p class="card-text">We have a 24hours, round the clock customer service personnels to help you with any complains or problems you might have or come across while using our service. <hr> You can easily contact us by sending us a message through a provided medium on our contact page. <hr> Get in touch with us directly: support@spincash.com</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-2">
                        <div class="card bg-light mb-3 h-100">
                            <div class="card-header">AVAILABLE PACKAGES</div>
                            <div class="card-body">
                                <!--<h5 class="card-title">Light card title</h5>-->
                                <p class="card-text">Request and pay any of the following packages to get 50% interest in return <hr>- Invest N2000 to get N3000 in return (Interest-N1000)<br><br> - Invest N4000 to get N6000 in return (Interest-N2000) <br><br> - Invest N6000 to get N9000 in return (Interest-N3000) <br><br> - Invest N8000 to get N12000 in return (Interest-N4000) <br><br> - Invest N10000 to get N15000 in return (Interest-N5000) </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--Mian body ends-->
        <br/><br/><br/>

<?php
    include 'includes/footer.php';
?>        
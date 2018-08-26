<?php require_once("includes/session.php"); ?>
<?php include("includes/header.php"); ?>
        <br><br><br>
        <!--Main Body Starts-->
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="home" aria-selected="true">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#history" role="tab" aria-controls="contact" aria-selected="false">History</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="home-tab">...</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card text-center">
                    <div class="card-header">
                        About Cashflow
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Welcome to Cashflow</h5>
                        <p class="card-text">Are you looking for the safest and low risk way of increasing profit every 48 hours?, if yes, you are at the right place<br>Cashflow is a very simple platform where you recieve a 50% interest for every N4000 you pay/donate, This is real!!!, all you have to do is to make a payment request in your dashboard and within 24hours you will be linked with who you will donate/pay N4000 to, once the receipient confirms your payment you will be legible to recieve in return, 50% of what you have payed out. <i>Other Packages are not available in your locality to reduce fraud.</i> <hr> This platform is very easy to use and simple to understand. with its friendly user interface it is intended to provide not only quality service but a worthwhile user experience, Click <a href="reg.php">here</a> if you are not yet registered to get started.</p>
                    </div>
                </div>
                <hr>
            </div>
        <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div>
        </div>
        <!--Mian body ends-->

<?php include("includes/footer.php"); ?>


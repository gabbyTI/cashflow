<?php require_once("includes/session.php"); ?>
<?php include("includes/profile_header.php"); ?>
        <br><br><br>
        
        <!--Main Body Starts-->
        <div class="container">

            <!--Nav list section begins-->
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
            <!--Nav list section ends-->

            <!--Tab Contents Section-->
            <div class="tab-content" id="myTabContent">
                <!--Dashboard Section begin-->
                <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card text-center">
                        <div class="card-header">
                            User Dashboard
                        </div>
                        <div class="card-body" style="text-align: left">
                            
                        </div>
                    </div>
                </div>
                <!--Dashboard Section ends-->
                
                <!--Profile Section begins-->
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="card text-center">
                        <div class="card-header">
                            Profile
                        </div>
                        <div class="card-body" style="text-align: left">
                            <div class="alert alert-info">
                                Complete your registeration by providing your account details
                            </div>
                            <form method="post" action="includes/reg_process.php">
                                <!--Username-->
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" minlength="3" maxlength="10" class="form-control" name="username" placeholder="Enter username" required>
                                </div>
                                <!--Email-->
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <!--Phone No.-->
                                <div class="form-group">
                                    <label>Phone No.</label>
                                    <input type="tel" maxlength="11" minlength="10" class="form-control" name="phoneNumber" placeholder="Enter Phone Number" required>
                                </div>
                                <!--Password-->
                                <div class="form-group">
                                    <label>Bank Name</label>
                                    <input type="Text" maxlength="20" minlength="5" class="form-control"name="bankname" placeholder="Account Name" required>
                                </div>
                                <!--Confirm password-->
                                <div class="form-group">
                                    <label>Account No</label>
                                    <input type="number" maxlength="15" minlength="5" class="form-control" name="accountno" placeholder=" Confirm Password" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">Edit Profile</button>
                                <a href="#"><input type="button" value="Change Password" class="btn btn-primary btn-sm"></a>
                            </form>
                        </div>
                    </div>
                    <hr>
                </div>
                <!--/Profile Section ends/-->

                <!--History Section Begins-->
                <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="card text-center">
                        <div class="card-header">
                            Transaction History
                        </div>
                        <div class="card-body" style="text-align: left">
                            <div class="table-responsive" style="font-size: 15px;">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Payer</th>
                                    <th scope="col">Receipient</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Confirm</th>
                                    <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>N4000</td>
                                    <td>Pending</td>
                                    <td>20/8/2018</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>N4000</td>
                                    <td>Pending</td>
                                    <td>20/8/2018</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>N4000</td>
                                    <td>Pending</td>
                                    <td>20/8/2018</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--History Section ends-->

            </div>
            <!--Tab Contents Secrion-->

        </div>
        <!--Mian body ends-->

<?php include("includes/footer.php"); ?>
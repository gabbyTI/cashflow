<?php require_once("includes/session.php");?>
<?php require_once("includes/profile_process.php");?>
<?php include("includes/profile_header.php");?>
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
                            User Dashboard <?php  echo $_SESSION['username']; ?>
                        </div>
                        <div class="card-body" style="text-align: left">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6" >
                                    <div class="card"  style="background: lightgray;">
                                    <div class="card-body">
                                        <h5 class="card-title">Make Payment Request</h5>
                                        <hr>
                                        <p class="card-text">Click the button below to make a payment request. Your request will be confirm within 12hour. Once it is comfirmed you will recieve a merging info within the next 24hrs to which you will be required to pay to.</p>
                                        <form method="post" action="includes/profile_process.php">
                                        <button type="submit" name="requestpay" class="btn btn-primary">Request to Pay</a>
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card"  style="background: lightgray;">
                                    <div class="card-body">
                                        <h5 class="card-title">Merging Information</h5>
                                        <hr>
                                        <?php

                                        ?>
                                        <p class="card-text">
                                            <?php
                                                
                                            ?>
                                            
                                            <!--$id = $db[0];
                                            $transacid = $db[1];
                                            $pyr = $db[2];
                                            $rcvr = $db[3];
                                            $amt = $db[4];
                                            $cnfm = $db[5];
                                            $dte = $db[6];
                                            $tme = $db[7];-->

                                            <div class="table">
                                            <table class="table-responsive" style="font-size: 10px;">
                                                <thead class="thead-light">
                                                    <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">transacid</th>
                                                    <th scope="col">Payer</th>
                                                    <th scope="col">Receipient</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Confirm</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Time</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                //code to grab user information for display thus the 'dis' prefix which entails display
                                                $num = 'pending';
                                                $query = "SELECT * FROM transac WHERE (payer = '{$sessionkey}' OR recipient = '{$sessionkey}') AND (confirm = '{$num}')";
                                                $result= mysqli_query($connection,$query);
                                                if (!$result){
                                                    echo '<p>You are not merged with anyone at thing moment, Request a payment if you have not or if you are expecting to be merged, check back with 12hours, do not hesitate to contact us if you encounter any problem or you havent been merged after 24hrs</p>';
                                                }

                                                while ($db=mysqli_fetch_row($result)){
                                                    echo 
                                                    "<tr>".
                                                    "<th scope='row'>".$db[0]."</th>".
                                                    "<td>".$db[1]."</td>".
                                                    "<td>".$db[2]."</td>".
                                                    "<td>".$db[3]."</td>".
                                                    "<td>".$db[4]."</td>".
                                                    "<td>".$db[5]."</td>".
                                                    "<td>".$db[6]."</td>".
                                                    "<td>".$db[7]."</td>".
                                                    "</tr>";
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                            </div>
                                        </p>
                                        <div class="alert alert-info">
                                            <small>Scroll left on mobile devices to view more details</small>
                                            <form class="form-inline" method="post" action="includes/profile_process.php">
                                                <input type="text" name="chkuser" class="form-control" id="exampleInputNumber" aria-describedby="" placeholder="Retrieve user contacts" required>
                                                <button class="btn btn-sm btn-primary" type="submit" name="retrieveuser">check username</button>
                                            </form>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <div class="card"  style="background: lightgray;">
                                        <h5 class="card-header">Confirm Payment</h5>
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <p class="card-text">Type in or paste the transaction code you recieved and click confirm to confirm payment</p>
                                            <form class="form-inline" method="post" action="includes/profile_process.php">
                                            <input type="number" name="confirmid" class="form-control" id="exampleInputNumber" aria-describedby="" placeholder="Transaction code here" required>
                                                <button class="btn btn-primary" type="submit" name="confirmtransac">Confirm</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
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
                            <form method="post" action="includes/profile_process.php">
                                <!--Username-->
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" minlength="3" maxlength="10" class="form-control" name="username" value="<?php echo $disun?>" required disabled>
                                </div>
                                <!--Email-->
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="<?php echo $disem?>" requied disabled>
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <!--Phone No.-->
                                <div class="form-group">
                                    <label>Phone No.</label>
                                    <input type="tel" maxlength="11" minlength="10" class="form-control" name="phoneNumber" value="<?php echo $disphone?>" required disabled>
                                </div>
                                <!--Bank Name-->
                                <div class="form-group">
                                    <label>Bank Name</label>
                                    <input type="Text" maxlength="20" minlength="5" class="form-control" value="<?php echo $disbn?>" required disabled>
                                </div>
                                <!--Account No-->
                                <div class="form-group">
                                    <label>Account No</label>
                                    <input type="number" maxlength="15" minlength="5" class="form-control" value="<?php echo $disan?>" required disabled>
                                </div>
                                
                                <!-- Button trigger modal -->
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editprofile">Update Profile</button>
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#changepassword">Change Password</button>
                                </div>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="editprofileTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editprofileTitle">Update Your Account Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <form method="post" action="includes/profile_process.php">
                                            <div class="form-group">
                                                <label>Bank Name</label>
                                                <input type="text" minlength="3" maxlength="10" class="form-control" name="bankname" aria-describedby="emailHelp" value="<?php echo $disbn?>" required>
                                            </div>
                                        
                                            <div class="form-group">
                                                <label>Account Number</label>
                                                <input type="text" maxlength="15" minlength="5" class="form-control" name="accntno" value="<?php echo $disan?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Account Type</label>
                                                <input type="text" minlength="3" maxlength="10" class="form-control" name="accnttype" value="<?php echo $disat?>" required>
                                            </div>
                                            <button type="submit" name="updateaccnt" class="btn btn-primary">Submit</button>
                                        </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="changepassword" tabindex="-1" role="dialog" aria-labelledby="changepasswordTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="changepasswordTitle">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="post" action="includes/login_process.php">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" minlength="3" maxlength="10" class="form-control" name="password" aria-describedby="emailHelp" placeholder="Old Password" required>
                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" maxlength="15" minlength="5" class="form-control" name="newpassword" placeholder="New Password" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" maxlength="15" minlength="5" class="form-control" name="confirmnewpassword" placeholder="Confirm Password" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Change</button>
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                
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
                        <div class="table-responsive">
                            <table class="table" style="font-size: 15px;">
                                <thead class="thead-light">
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">transacid</th>
                                    <th scope="col">Payer</th>
                                    <th scope="col">Receipient</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Confirm</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                //code to grab user information for display thus the 'dis' prefix which entails display
                                $num = 0;
                                $query = "SELECT * FROM transac WHERE (payer = '{$sessionkey}' OR recipient = '{$sessionkey}')";
                                $result= mysqli_query($connection,$query);
                                if (!$result){
                                    echo '<p>You are not merged with anyone at thing moment, Request a payment if you have not or if you are expecting to be merged, check back with 12hours, do not hesitate to contact us if you encounter any problem or you havent been merged after 24hrs</p>';
                                }

                                while ($db=mysqli_fetch_row($result)){
                                    echo 
                                    "<tr>".
                                    "<th scope='row'>".$db[0]."</th>".
                                    "<td>".$db[1]."</td>".
                                    "<td>".$db[2]."</td>".
                                    "<td>".$db[3]."</td>".
                                    "<td>".$db[4]."</td>".
                                    "<td>".$db[5]."</td>".
                                    "<td>".$db[6]."</td>".
                                    "<td>".$db[7]."</td>".
                                    "</tr>";
                                }
                                ?>
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
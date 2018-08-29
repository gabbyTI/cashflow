<?php
    // Include Header file
    include("includes/header.php");

    // If URL Query string 'id' is set
    if(isset($_GET['id'])){
        $UID = @$_GET['id']; ## Assign URL Query string 'id' to Variable $id
    }
    ## else if not set,
    else{
        // Set $UID = null
        $UID = null;
        echo "<span class='animated infinite flash text-danger'><br /><br /><h1>BAD REQUEST</h1></span>"; ## Display this error
        exit(); ## Exit current script
    }

    // Query1.1: Select all from table `users` where column `id` = URL Query string variable $UID: User's id
    $get_user = $connection->query("SELECT * FROM `user_details` WHERE `ID` = '$UID'");

    ## Fetch an associative array of Query1.1
    $UInfo = $get_user->fetch_array();
    $uname = $UInfo['username']; ## Assign 'first_name' to $fname
    $email = $UInfo['email']; ## Assign 'email' to $email
    $phone = $UInfo['phone']; ## Assign 'phone' to $phone
    
    // Query1.2: Select all from table `fpwrd` where column `email` = $email: email from associative array of Query1.1
    $sec_check2 = $connection->query("SELECT * FROM `fpwrd` WHERE `email` = '$email'");
    
    ## Count number of rows where query1.2 is true
    $count2 = $sec_check2->num_rows;

    ## If values of variables $count2 and $count == 0,
    if (($count2) == 0) {
        # code...
        ## Display the following error
        ?>
        <div class="mt-5 bg-light text-black pb-5 p-3 shadow">
            <div class="container">
                <h3 class="text-warning">
                    <b>OOPS THE PAGE YOU'RE LOOKING FOR DOESN'T EXIST OR HAS BEEN MOVED!!!</b>
                    <div class="text-center text-danger"><i class="fa fa-frown-o"></i></span>
                </h3>
            </div>
        </div>        
        <?php
        exit();
    }
    
    //declaring variables to prevent errors
    $err = "";

    $sub = @$_POST['submit']; ## Assign submit button to variable $sub
    $pwrd = @$_POST['pwrd']; ## Assign new password to variable $pwrd
    $cpwrd = @$_POST['cpwrd']; ## Assign confirmed new password to variable $pwrd

    // If Submit button is clicked
    if ($sub) {
        ## If Password and confirm password field is not empty
        if ($pwrd && $cpwrd != "") {
            # code...
            
            ## Encrypt the password using its md5 hash
            $pwrd = md5($pwrd); 

            ## Query1.5: Update table `users` set column `password` = $pwrd: Inputted new password; where column `email` = $email: email from associative array of Query1.1
            $pwrd_update = $connection->query("UPDATE `user_details` SET `password` = '$pwrd' WHERE `email` = '$email'");
            
            ## Query1.7: Delete from table `fpwrd` where column `email` = $email: email from associative array of Query1.1
            $rem_fp = $connection->query("DELETE FROM `fpwrd` WHERE `email` = '$email'");
            
            ## Assign the following to variable $err and display where $err is echoed later in the html part of this script
            $err = ('
                <div class="alert alert-success">
                    <span class="fa fa-check-circle-o"></span> Password successfully changed
                    <a href="index.php">Continue to Login</a>
                </div>
            ');
        }
        ## Else, If Password and confirm password field is empty
        else{
            ## Assign the following to variable $err and display where $err is echoed later in the html part of this script
            $err = ('
                <div class="alert alert-danger">
                    <i class="fa fa-exclamation-circle"></i> Please fill in the required fiels!!!
                </div>
            ');
        }
    }

?>

<div class="mt-2 mt-md-4 bg-light text-black p-3 shadow">
    <div class="container">
        <h3><b><?php echo $uname; ?></b></h3>
    </div>
</div>
<br />
<div class="container-fluid card bg-dark pwrdch text-white pt-3 pb-3">
    <form action="" method="post" validate>
        <span class="text-capitalize text-danger"><h4><b>Please Fill in the required fields:</b></h4></span>
        <div class="pt-3 col-md-6">
            <span class="text-primary">*Required Fields</span>
            <div class="row">
                <div class="pt-3 col-md-6 p-0">
                    <div class="d-flex input-group input-group-sm">
                        <span class="flex-grow"><i class="fa fa-lock"></i></span>
                        <input type="password" name="pwrd" class="form-control bg-dark text-white" placeholder="Input new password" required />
                        <h4 class="input-group-append text-primary">*</h4>
                    </div>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="pt-3 col-md-6 p-0">
                    <div class="d-flex input-group input-group-sm">
                        <span class="flex-grow"><i class="fa fa-lock"></i></span>
                        <input type="password" name="cpwrd" class="form-control bg-dark text-white" placeholder="Confirm new password" required />
                        <h4 class="input-group-append text-primary">*</h4>
                    </div>
                </div>
            </div>
            <br />
            <div class="row pl-0">
                <button type="submit" class="btn btn-info" name="submit" value="submit">Submit</button>    
            </div>
            <br />
            <div class="row pl-0">
                <?php echo $err; ?><!-- Display strings in variable $err -->
            </div>
        </div>
    </form>
</div>
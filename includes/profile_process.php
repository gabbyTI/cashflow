<?php require_once("session.php"); ?>
<?php include 'header.php';?>

<?php 

    //Declaration of Global vriables
    //--------------------------------
    $disbn = "";
    $disan = "";
    $disat = "";
    $disid = "";
    $disun = "";
    $disem = "";
    $disphone = "";
    $useridoutput = "";
    $useranoutput ="";
    $useratoutput ="";
    $userbnoutput ="";
    $userphoneoutput ="";
    // ----------------------------

    $sessionkey = $_SESSION['username'];


    // 1. Code to grab users info for display in profile
    $query = "SELECT ID, username, email, phone_no FROM user_details WHERE (username = '{$sessionkey}')";
    $result= mysqli_query($connection,$query);
    if (!$result){
        die("Database connection failed");
    }

    while ($db=mysqli_fetch_row($result)){
        $disid = $db[0];
        $disun = $db[1];
        $disem = $db[2];
        $disphone = $db[3];
    }
    
    // 2. code to grab user bank information for display
    $query = "SELECT bankname, accountno, accounttype FROM bank_details WHERE (userID = '{$disid}')";
    $result= mysqli_query($connection,$query);
    if (!$result){
        die("Database connection failed");
    }

    while ($db=mysqli_fetch_row($result)){
        $disbn = $db[0];
        $disan = $db[1];
        $disat = $db[2];
    }
                              
    //Code to update Profile with bank details
    if (isset($_POST['updateaccnt'])) {
        $bn= trim($_POST["bankname"]);
        $an= trim($_POST["accntno"]);
        $at= trim($_POST["accnttype"]);

        $query = "SELECT ID FROM user_details WHERE (username = '{$sessionkey}') LIMIT 1";
        $result= mysqli_query($connection,$query);
        if (!$result){
            die("Database connection failed");
        }

        while ($db=mysqli_fetch_row($result)){
            $user_id = $db[0];
        }

        $query = "SELECT * FROM bank_details WHERE (userID = '{$user_id}') LIMIT 1";
        $result= mysqli_query($connection,$query);
        
        if ($result){
            $query = "UPDATE bank_details set bankname = '{$bn}', accountno = '{$an}', accounttype = '{$at}' WHERE (userID = '{$user_id}')";

            $result=mysqli_query($connection,$query);
            if(!$result){
                die("Database connection failed");
            }else{
                echo 
                    "<div class='container'>
                        <div class='card text-center'>
                            <div class='card text-center' style='padding-top:50px;'>
                                <div class='card-header'>
                                    <h2>Your Update Was successfull</h2>
                                </div>
                                <div class='card-body'>
                                    <hr>
                                    <p class='card-text'>click here to go back</p>
                                    <a href='../profile.php' class='btn btn-primary'>back</a>
                                </div>
                            </div>
                        </div>
                    </div>";
            }
        }else{
            $query = "INSERT INTO bank_details
            (ID, userID, bankname, accountno, accounttype) 
            VALUES ('','{$user_id}','{$bn}','{$an}','{$at}')";

            $result=mysqli_query($connection,$query);
            if(!$result){
                die("Database connection failed");
            }else{
                echo 
                "<div class='container'>
                    <div class='card text-center'>
                        <div class='card text-center' style='padding-top:50px;'>
                            <div class='card-header'>
                                <h2>Your Update Was successfull</h2>
                            </div>
                            <div class='card-body'>
                                <hr>
                                <p class='card-text'>click here to go back</p>
                                <a href='../profile.php' class='btn btn-primary'>back</a>
                            </div>
                        </div>
                    </div>
                </div>";
            }

            exit;
        }
        
    }

    //Code to comfirm Payment with transaction ID [Uncompleted]
    if (isset($_POST['confirmtransac'])){
        $transacchk = trim($_POST['confirmid']);
        $con = 'confirmed';
        
        $query = "SELECT recipient FROM transac WHERE (transacID = '{$transacchk}') LIMIT 1";
        $result= mysqli_query($connection,$query);
        if (!$result){
            die("Database connection failed");
        }else{
            while ($db=mysqli_fetch_row($result)){
                $rcpt = $db[0];
            }
        }

        if ($rcpt == $sessionkey) {

            $query = "SELECT confirm FROM transac WHERE (transacID = '{$transacchk}') LIMIT 1";
            $result= mysqli_query($connection,$query);
            if (!$result){
                die("Database connection failed");
            }

            if (mysqli_num_rows($result) == 1){
                $query = "UPDATE transac set confirm = '{$con}' where (transacID = '{$transacchk}')";

                $result=mysqli_query($connection,$query);
                if(!$result){
                    die("Database connection failed");
                }else{
                    echo 
                        "<div class='container'>
                            <div class='card text-center'>
                                <div class='card text-center' style='padding-top:50px;'>
                                    <div class='card-header'>
                                        <h2>Confirmation Successfull: ".$userchk."</h2>
                                    </div>
                                    <div class='card-body'>
                                        <h1 class='card-title'></h1>
                                        <strong><p class='card-text'>Payment with transaction ID: ".$transacchk." has been confirmed!!!</p></strong>
                                        <hr>
                                        <p>This is to certify that user (".$sessionkey.") has recieved payment for this transaction in full!</p>
                                        <hr>
                                        <p class='card-text'>click here to go back</p>
                                        <a href='../profile.php' class='btn btn-primary'>back</a>
                                    </div>
                                </div>
                            </div>
                        </div>";
                    }

                exit;
            }
        }else{
            echo 
                "<div class='container'>
                    <div class='card text-center'>
                        <div class='card text-center' style='padding-top:50px;'>
                            <div class='card-header'>
                                <h2>Fatal Error: Confirmation Failed!!!</h2>
                            </div>
                            <div class='card-body'>
                                <h1 class='card-title'></h1>
                                <strong><p class='card-text'>Sorry ".$sessionkey." , you do not have permission to confirm this payment</p></strong>
                                <hr>
                                <p class='card-text'>click here to go back</p>
                                <a href='../profile.php' class='btn btn-primary'>back</a>
                            </div>
                        </div>
                    </div>
                </div>";
        }
    }

    //Code to retrieve user contacts and details
    if (isset($_POST['retrieveuser'])){
        $userchk = trim($_POST['chkuser']);
        
        $query = "SELECT ID, phone_no FROM user_details WHERE (username = '{$userchk}') LIMIT 1";
        $result= mysqli_query($connection,$query);
        if (!$result){
            die("Database connection failed");
        }

        while ($db=mysqli_fetch_row($result)){
            $useridoutput = $db[0];
            $userphoneoutput = $db[1];
        }

        $query = "SELECT bankname, accountno, accounttype FROM bank_details WHERE (userID = '{$useridoutput}') LIMIT 1";
        $result= mysqli_query($connection,$query);
        if (!$result){
            die("Database connection failed");
        }

        while ($db=mysqli_fetch_row($result)){
            $userbnoutput = $db[0];
            $useranoutput = $db[1];
            $useratoutput = $db[2];
        }

        echo 
        "<div class='container'>
            <div class='card text-center'>
                <div class='card text-center' style='padding-top:50px;'>
                    <div class='card-header'>
                        <h2>Details Search Result For: ".$userchk."</h2>
                    </div>
                    <div class='card-body'>
                        <h1 class='card-title'></h1>
                        <p class='card-text'>Bank Name: ".$userbnoutput."</p>
                        <p class='card-text'>Account No: ".$useranoutput."</p>
                        <p class='card-text'>Account Type: ".$useratoutput."</p>
                        <strong><p class='card-text'>Phone No: ".$userphoneoutput."</p></strong>
                        <hr>
                        <p class='card-text'>click here to go back</p>
                        <a href='../profile.php' class='btn btn-primary'>back</a>
                    </div>
                </div>
            </div>
        </div>";
    }

    //Code to request payment
    if (isset($_POST['requestpay'])) {
        $pamt = trim($_POST['amt']);

        if ($pamt == "2000" || $pamt == "4000"){

            //Code to execute if condition is true
            $query = "SELECT * FROM user_details WHERE (username = '{$sessionkey}') LIMIT 1";
            $result= mysqli_query($connection,$query);
            if (!$result){
                die("Database connection failed");
            }

            while ($db=mysqli_fetch_row($result)){
                $user_id = $db[0];
            }
            $curdate = date("Y-m-d");
            $surtime = date("h:i:sa");
            
            if (mysqli_num_rows($result) == 1) {
                $query = "INSERT INTO payers
                (userID, username, amount, date, time, Status) 
                VALUES ('{$user_id}','{$sessionkey}','{$pamt}','{$curdate}','{$surtime}','Pending')";

                $result = mysqli_query($connection,$query);

                if(!$result){
                    echo '<div class="container">
                    <div class="card text-center">
                        <div class="card text-center" style="padding-top:50px;">
                            <div class="card-header">
                                <h2>Something went wrong: Request Was not sent '."true $row".'</h2>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title"></h1>
                                <p class="card-text">Your request was not sent succesfully, you can go back and try again</p>
                                <p class="card-text">click here to go back</p>
                                <a href="../profile.php" class="btn btn-primary">back</a>
                            </div>
                        </div>
                    </div>
                </div>';
                }else{
                    //header("location: ../profile.php");
                    echo '<div class="container">
                            <div class="card text-center">
                                <div class="card text-center" style="padding-top:50px;">
                                    <div class="card-header">
                                        <h2>Request Sent Successfully</h2>
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title"></h1>
                                        <p class="card-text">You have just sent a payment request, you will be merged within 12hours</p>
                                        <p class="card-text">click here to go back to your dashboard</p>
                                        <a href="../profile.php" class="btn btn-primary">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';
                    exit;
                }

                exit;
            }
            
        }else if ($pamt == "6000" || $pamt == "8000"){
            $query = "SELECT * FROM user_details WHERE (username = '{$sessionkey}') LIMIT 1";
            $result= mysqli_query($connection,$query);
            if (!$result){
                die("Database connection failed");
            }

            while ($db=mysqli_fetch_row($result)){
                $user_id = $db[0];
            }
            $curdate = date("Y-m-d");
            $surtime = date("h:i:sa");
            if (mysqli_num_rows($result) == 1){
                $query = "INSERT INTO payers
                (userID, username, amount, date, time) 
                VALUES ('{$user_id}','{$sessionkey}','{$pamt}','{$curdate}','{$surtime}')";

                $result=mysqli_query($connection,$query);
                if(!$result){
                    echo '<div class="container">
                    <div class="card text-center">
                        <div class="card text-center" style="padding-top:50px;">
                            <div class="card-header">
                                <h2>Something went wrong: Request Was not sent</h2>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title"></h1>
                                <p class="card-text">Your request was not sent succesfully, you can go back and try again</p>
                                <p class="card-text">click here to go back</p>
                                <a href="../profile.php" class="btn btn-primary">back</a>
                            </div>
                        </div>
                    </div>
                </div>';
                }else{
                    //header("location: ../profile.php");
                    echo '<div class="container">
                            <div class="card text-center">
                                <div class="card text-center" style="padding-top:50px;">
                                    <div class="card-header">
                                        <h2>Request Sent Successfully</h2>
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title"></h1>
                                        <p class="card-text">You have just sent a payment request, you will be merged within 12hours</p>
                                        <p class="card-text">click here to go back to your dashboard</p>
                                        <a href="../profile.php" class="btn btn-primary">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';
                    exit;
                }

                exit;
            } 
        }else if ($pamt == "10000") {
            $query = "SELECT * FROM user_details WHERE (username = '{$sessionkey}') LIMIT 1";
            $result= mysqli_query($connection,$query);
            if (!$result){
                die("Database connection failed");
            }

            while ($db=mysqli_fetch_row($result)){
                $user_id = $db[0];
            }
            $curdate = date("Y-m-d");
            $surtime = date("h:i:sa");
            if (mysqli_num_rows($result) == 1){
                $query = "INSERT INTO payers
                (userID, username, amount, date, time) 
                VALUES ('{$user_id}','{$sessionkey}','{$pamt}','{$curdate}','{$surtime}')";

                $result=mysqli_query($connection,$query);
                if(!$result){
                    echo '<div class="container">
                    <div class="card text-center">
                        <div class="card text-center" style="padding-top:50px;">
                            <div class="card-header">
                                <h2>Something went wrong: Request Was not sent</h2>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title"></h1>
                                <p class="card-text">Your request was not sent succesfully, you can go back and try again</p>
                                <p class="card-text">click here to go back</p>
                                <a href="../profile.php" class="btn btn-primary">back</a>
                            </div>
                        </div>
                    </div>
                </div>';
                }else{
                    //header("location: ../profile.php");
                    echo '<div class="container">
                            <div class="card text-center">
                                <div class="card text-center" style="padding-top:50px;">
                                    <div class="card-header">
                                        <h2>Request Sent Successfully</h2>
                                    </div>
                                    <div class="card-body">
                                        <h1 class="card-title"></h1>
                                        <p class="card-text">You have just sent a payment request, you will be merged within 12hours</p>
                                        <p class="card-text">click here to go back to your dashboard</p>
                                        <a href="../profile.php" class="btn btn-primary">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';
                    exit;
                }

                exit;
            }

        }else{
            echo '<div class="container">
                <div class="card text-center">
                    <div class="card text-center" style="padding-top:50px;">
                        <div class="card-header">
                            <h2>Request Failed</h2>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title"></h1>
                            <p class="card-text">The Package amount you choose is not available, checkout available packages below</p>
                            <p class="card-text">click here to go back to your dashboard</p>
                            <a href="../profile.php" class="btn btn-primary">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        ';}
    }
?>
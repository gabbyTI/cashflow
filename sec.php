<?php
    // Include Header file
    include("includes/header.php");
    
    // If URL Query string 'id' is set
    if(isset($_GET['id'])){
        #code...
        // Get its value and store it in $UID
        $UID = @$_GET['id']; ## Assign URL Query string 'id' to Variable $id
    }
    ## else if not set,
    else{
        // Set $UID = null 
        $UID = null;
        echo "<span class='text-danger'><br /><br /><h1>BAD REQUEST</h1></span>"; ## Display this error
        exit(); ## Exit current script
    }

    // Query1.1: Select all from table `users` where column `id` = URL Query string variable $UID: User's id
    $get_user = $connection->query("SELECT * FROM `user_details` WHERE `ID` = '$UID'");

    ## Fetch an associative array of Query1.1
    $UInfo = $get_user->fetch_array();
    $uname = $UInfo['username']; ## Assign 'first_name' to $fname
    $email = $UInfo['email']; ## Assign 'email' to $email
    
    // Query1.2: Select all from table `sec_qa` where column `email` = $email: email from associative array of Query1.1
    $get_qa = $connection->query("SELECT * FROM `sec_qa` WHERE `email` = '$email'");
    echo "<br /><br />";
    ## Fetch an associative array of Query1.1
    $qa = $get_qa->fetch_array();
    $question = $qa['ques']; ## Assign 'ques' to $question

    // Query1.3: Select all from table `fpwrd` where column `email` = $email: email from associative array of Query1.1
    $sec_check2 = $connection->query("SELECT * FROM `fpwrd` WHERE `email` = '$email'");
    
    ## Count number of rows where query1.3 is true
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
    
    ## If there is no question mark,
    if(strpos($question, "?") == false){
        ## Add a question mark at the end of the question
        $question = str_ireplace($question, "$question?", $question);
    }

    //declaring variables to prevent errors
    $err = "";

    $sub = @$_POST['submit']; ## Assign submit button to variable $sub
    $ans = strip_tags(@$_POST['answer']); ## Assign inputted answer to variable $ans

    // If Submit button is clicked
    if ($sub) {
        ## If answer field is not empty
        if ($ans !== "") {
            # code...
            ## Query1.5: Select all from table `sec_qa` where column `answer` = $ans: Inputted answer
            $check_ans = $connection->query("SELECT * FROM `sec_qa` WHERE `answer` = '$ans'");
            
            ## Count number of rows where query1.5 is true
            $decide = $check_ans->num_rows;

            ## If one row from query1.5 is true,
            if($decide == 1){
                ## Assign the following to variable $err and display where $err is echoed later in the html part of this script
                $err = ('
                    <div class="alert alert-success">
                        <span class="fa fa-check-circle-o"></span> Success
                        <a href="pwrdch.php?id='.$UID.'">Click Here to change your password</a>
                    </div>
                ');
            }
            ## Else
            else{
                ## Assign the following to variable $err and display where $err is echoed later in the html part of this script
                $err = ('
                    <div class="alert alert-danger">
                        <i class="fa fa-exclamation-circle"></i> The given answer is incorrect, please try again...
                    </div>
                ');
            }
        }
        ## Else, if answer field is empty,
        else{
            ## Assign the following to variable $err and display where $err is echoed later in the html part of this script
            $err = ('
                <div class="alert alert-danger">
                    <i class="fa fa-exclamation-circle"></i> Please input your answer...
                </div>
            ');
        }
    }

?>
<div class="mt-5 mt-md-4 bg-light text-black p-3 shadow">
    <div class="container">
        <h3><b><?php echo $uname; ?></b></h3>
    </div>
</div>
<br />
<div class="container-fluid card bg-dark text-white pt-3 pb-3">
    <form action="" method="post" validate>
        <span class="text-capitalize text-danger"><h4><b>Please Answer the security question below:</b></h4></span>
        <div class="pt-3 col-md-10">
            <div class="row">
                <div class="col-md-10 p-0">
                    <label for="question"><span class="flex-grow"><i class="fa fa-lock"></i>&nbsp;</span> Security Question:</label>
                    <div class="form-text text-warning">
                        <?php echo $question; ?><!-- Display value of $question -->
                    </div>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-md-10 p-0">
                    <textarea name="answer" id="" rows="5" placeholder="Input your answer here..." style="width:100%" required></textarea>
                </div>
            </div>
            <br />
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
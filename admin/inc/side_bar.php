<?php require_once("../includes/connection.php") ?>
<div class="col-md-3">
    <div class="list-group pr-5">
        <a href="index.php" class="list-group-item list-group-item-action active"><span class="ti-settings" aria-hidden="true"></span>
                    Dashboard
        </a>
        <!--              BANK DETAILS NOT IN USE
        <a href="user_bank_details.php" class="list-group-item list-group-item-action">
            <span class="ti-list-ol" aria-hidden="true"></span>&nbsp;&nbsp;Bank Details &nbsp;&nbsp;<span class="badge badge-dark badge-pill pl-5" >
            <?php
                $result = mysqli_query($connection,"select count(*) Total from bank_details");
                if(!$result){
                    die("Database Connection Failed");
                }

                while($row = mysqli_fetch_array($result)){
                    echo $row['Total'];
                }
            ?>
            </span>
        </a> -->
        <a href="transactions.php" class="list-group-item list-group-item-action">
            <span class="ti-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Transactions &nbsp;&nbsp;<span class="badge badge-dark badge-pill pl-5" >
                <?php
                    $result = mysqli_query($connection,"select count(*) Total from transac");
                    if(!$result){
                        die("Database Connection Failed");
                    }

                    while($row = mysqli_fetch_array($result)){
                        echo $row['Total'];
                    }
                ?>
            </span>
        </a>
        <a href="users.php" class="list-group-item list-group-item-action">
            <span class="ti-user" aria-hidden="true"></span>&nbsp;&nbsp;Members &nbsp;&nbsp;<span class="badge badge-dark badge-pill pl-5" >
                <?php
                    $result = mysqli_query($connection,"select count(*) Total from user_details");
                    if(!$result){
                        die("Database Connection Failed");
                    }

                    while($row = mysqli_fetch_array($result)){
                        echo $row['Total'];
                    }
                ?>
            </span>
        </a>
        <a href="Payers.php" class="list-group-item list-group-item-action">
            <span class="ti-user" aria-hidden="true"></span>&nbsp;&nbsp;Payers &nbsp;&nbsp;<br><span class="badge badge-dark badge-pill pl-5" >
                <?php
                    $result = mysqli_query($connection,"select count(*) Total from Payers");
                    if(!$result){
                        die("Database Connection Failed");
                    }

                    while($row = mysqli_fetch_array($result)){
                        echo $row['Total'];
                    }
                ?>
            </span>
        </a>
    </div>
</div>
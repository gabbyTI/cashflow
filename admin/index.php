<?php include("inc/header.php") ?>
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 pt-2">
                    <h1><span class="ti-settings" aria-hidden="true"></span>&nbsp;Dashboard</h1>
                </div>
            </div>
        </div>
    </header>


    <section id="breadcrumb ">
        <div class="container pt-1">
            <ol class="breadcrumb pb-0 pt-0">
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </section>


    <section id="main">
        <div class="container">
            <div class="row">
            <?php include("inc/side_bar.php") ?>

                <div class="col-md-9">
                    <ul class="list-group">
                        <li class="list-group-item active">
                            <h2>Website Overview</h2>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card pt-1 pl-4">
                                        <h5 class="pl-2">
                                            <span class="ti-user" aria-hidden="true"></span>&nbsp;
                                            <?php
                                                $result = mysqli_query($connection,"select count(*) Total from user_details");
                                                if(!$result){
                                                    die("Database Connection Failed");
                                                }

                                                while($row = mysqli_fetch_array($result)){
                                                    echo $row['Total'];
                                                }
                                            ?>
                                        </h5>
                                        <h5 class="pl-2">Members</h5>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card pt-1 pl-4">
                                        <h5 class="pl-2">
                                            <span class="ti-list-ol" aria-hidden="true"></span>&nbsp;
                                            <?php
                                                $result = mysqli_query($connection,"select count(*) Total from Payers");
                                                if(!$result){
                                                    die("Database Connection Failed");
                                                }

                                                while($row = mysqli_fetch_array($result)){
                                                    echo $row['Total'];
                                                }
                                            ?>
                                        </h5>
                                        <h5 class="pl-2">Payers</h5>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card pt-1 pl-4">
                                        <h5 class="pl-2">
                                            <span class="ti-pencil" aria-hidden="true"></span>&nbsp;
                                            <?php
                                                $result = mysqli_query($connection,"select count(*) Total from transac");
                                                if(!$result){
                                                    die("Database Connection Failed");
                                                }

                                                while($row = mysqli_fetch_array($result)){
                                                    echo $row['Total'];
                                                }
                                            ?>
                                        </h5>
                                        <h5 class="pl-2">Transactions</h5>
                                    </div>
                                </div>
                                
                            </div>
                        </li>
                    </ul>

                    <div class="list-group pt-2">
                        <a class="list-group-item list-group-item-action active" style="color:white;">
                            <h3> Latest Members </h3>
                        </a>
                        <div class="card">
                        <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Phone No.</th>
                                <th>Referral</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $result = mysqli_query($connection,"select * from user_details order by id desc limit 4");
                            if(!$result){
                                die("Database Connection Failed");
                            }
                            
                        ?>
                                <?php while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                                <td><?php echo $row[0] ?></td>
                                <td><?php echo $row[1] ?></td>
                                <td><?php echo $row[3] ?></td>
                                <td><?php echo $row[4] ?></td>
                                <td><?php echo $row[5] ?></td>                                
                            </tr>
                            <?php } ?>
                           
                        </tbody>
                    </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include("inc/footer.php") ?>
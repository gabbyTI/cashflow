<?php require_once("../includes/connection.php") ?>
<?php include("inc/header.php") ?>
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 pt-2">
                    <h1><span class="ti-settings" aria-hidden="true"></span>&nbsp;Members</h1>
                </div>
            </div>
        </div>
    </header>


    <section id="breadcrumb ">
        <div class="container pt-1">
            <ol class="breadcrumb pb-0 pt-0">
                <li class="active">Dashboard | Members</li>
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
                            <h2>Members</h2>
                        </li>
                    </ul>
                    
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
                            $result = mysqli_query($connection,"select * from user_details");
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
                                <td>
                                    <a href="edit.html">
                                        <a href="#" type="button" class="btn btn-info">Edit</a></a> &nbsp;&nbsp;
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Delete</button>
                                </td>
                                
                            </tr>
                            <?php } ?>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


 <?php 
 include("inc/footer.php")
?>

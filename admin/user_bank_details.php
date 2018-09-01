<?php require_once("../includes/connection.php") ?>
<?php 
 include("inc/header.php")
?>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 pt-2">
                    <h1><span class="ti-settings" aria-hidden="true"></span>&nbsp;User Bank Details</h1>
                </div>
            </div>
        </div>
    </header>


    <section id="breadcrumb ">
        <div class="container pt-1">
            <ol class="breadcrumb pb-0 pt-0">
                <li class="active">Dashboard | Bank Details</li>
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
                            <h2>User Bank Details</h2>
                        </li>
                    </ul>
                    
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>UserID</th>
                                <th>Bank Name</th>
                                <th>Account No.</th>
                                <th>Account Type</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $result = mysqli_query($connection,"select * from bank_details");
                            if(!$result){
                                die("Database Connection Failed");
                            }
                            
                        ?>
                            <?php while($row = mysqli_fetch_array($result)){ ?>
                            <tr>
                            <tr>
                                <td><?php echo $row[1] ?></td>
                                <td><?php echo $row[2] ?></td>
                                <td><?php echo $row[3] ?></td>
                                <td><?php echo $row[4] ?></td>
                                <td>
                                    <a href="#">
                                        <button type="button" class="btn btn-info">Edit</button></a> &nbsp;&nbsp;
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

<?php include("../includes/connection.php") ?>
<?php include("inc/header.php") ?>
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 pt-2">
                    <h1><span class="ti-settings" aria-hidden="true"></span>&nbsp;Users</h1>
                </div>
            </div>
        </div>
    </header>


    <section id="breadcrumb ">
        <div class="container pt-1">
            <ol class="breadcrumb pb-0 pt-0">
                <li class="active">Dashboard | Users</li>
            </ol>
        </div>
    </section>


    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group pr-5">
                        <a href="index.html" class="list-group-item list-group-item-action active"><span class="ti-settings" aria-hidden="true"></span>
                                  Dashboard
                                </a>
                        <a href="pages.html" class="list-group-item list-group-item-action"><span class="ti-list-ol" aria-hidden="true"></span>&nbsp;&nbsp;Pages &nbsp;&nbsp;<span class="badge badge-dark badge-pill pl-5" >12</span></a>
                        <a href="hosts.html" class="list-group-item list-group-item-action"><span class="ti-pencil" aria-hidden="true"></span>&nbsp;&nbsp;Hosts &nbsp;&nbsp;<span class="badge badge-dark badge-pill pl-5" >33</span></a>
                        <a href="users.html" class="list-group-item list-group-item-action"><span class="ti-user" aria-hidden="true"></span>&nbsp;&nbsp;Users &nbsp;&nbsp;<span class="badge badge-dark badge-pill pl-5" >22</span></a>
                    </div>
                     </div>

                <div class="col-md-9">
                    <ul class="list-group">
                        <li class="list-group-item active">
                            <h2>Users</h2>
                        </li>
                    </ul>
                    <div class="col-md-12">
                        <li class="list-group-item">
                            <input class="form-control" type="text" placeholder="Filter Users....">
                        </li>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Phone No.</th>
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
                                <td>
                                    <a href="edit.html">
                                        <a href="useredit.php" type="button" class="btn btn-info">Edit</a></a> &nbsp;&nbsp;
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

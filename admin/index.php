<?php 
 include("inc/header.php")
?>

<?php 
 include("inc/navbar.php")
?>



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
                            <h2>Website Overview</h2>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card pt-1 pl-4">
                                        <h5 class="pl-2"><span class="ti-user" aria-hidden="true"></span>&nbsp;203</h5>
                                        <h5 class="pl-2">Users</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card pt-1 pl-4">
                                        <h5 class="pl-2"><span class="ti-list-ol" aria-hidden="true"></span>&nbsp;12</h5>
                                        <h5 class="pl-2">Pages</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card pt-1 pl-4">
                                        <h5 class="pl-2"><span class="ti-pencil" aria-hidden="true"></span>&nbsp;33</h5>
                                        <h5 class="pl-2">Posts</h5>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card pt-1 pl-4">
                                        <h5 class="pl-2"><span class="ti-stats-up" aria-hidden="true"></span>&nbsp;12,000</h5>
                                        <h5 class="pl-2">Visitors</h5>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="list-group pt-2">
                        <a class="list-group-item list-group-item-action active" style="color:white;">
                            <h3> Latest Users </h3>
                        </a>
                        <div class="card">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>City</th>
                                        <th>Pincode</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tanmay</td>
                                        <td>Bangalore</td>
                                        <td>560001</td>
                                    </tr>
                                    <tr>
                                        <td>Sachin</td>
                                        <td>Mumbai</td>
                                        <td>400003</td>
                                    </tr>
                                    <tr>
                                        <td>Uma</td>
                                        <td>Pune</td>
                                        <td>411027</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("inc/footer.php")?>

    <!--modals-->
    <?php include("inc/moddel.php")?> 
    <?php include("inc/modpage.php")?>
    <?php include("inc/modpost.php")?>
    <?php include("inc/moduser.php")?>
    <!--Add Page-->

  

    <script>
        CKEDITOR.replace('editor1')
        CKEDITOR.replace('editor2')
        CKEDITOR.replace('editor3')
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>



</html>
<?php 
 include("inc/header.php")
?>
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
                <li class="active">Dashboard | Edit</li>
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
                    <div class="modal-body">
                        <div class="form group">
                            <input type="text" class="form-control" placeholder="Page Title">
                        </div>
                        <form>
                            <div class="modal-body">
                                <div class="form-group">
                                    <textarea name="editor1" class="form-control" placeholder="Page Body"><label>Page Body</label></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br/><br/><br/>
    
    <?php 
 include("inc/footer.php")
?>

    <!--modals-->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p>Are You Sure You Wanna DELETE This Item.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">OK?</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="modal fade" id="addpage" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Page</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="form group">
                        <label>Page Titile</label>
                        <input type="text" class="form-control" placeholder="Page Title">
                    </div>
                    <div class="form-group">
                        <label>Page Body</label>
                        <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
                    </div>
                    <div class="checkbox">
                        <label>
                           <input type="checkbox">Confirm
                       </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>


    <div class="modal fade" id="addpost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                <div class="modal-body">
                    <div class="form group">
                        <label>Post Titile</label>
                        <input type="text" class="form-control" placeholder="Post Title">
                    </div>
                    <div class="form-group">
                        <label>Post Body</label>
                        <textarea name="editor2" class="form-control" placeholder="Post Body"></textarea>
                    </div>
                    <div class="checkbox">
                        <label>
                               <input type="checkbox">Confirm
                           </label>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                <div class="modal-body">
                    <div class="form group">
                        <label>User Name</label>
                        <input type="text" class="form-control" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <label>User Email</label>
                        <input type="text" class="form-control" placeholder="User Email"></input>
                    </div>
                    <div class="checkbox">
                        <label>
                               <input type="checkbox"> Confirm
                           </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>


   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>



</html>
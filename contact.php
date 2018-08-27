<?php
    include 'includes/header.php';
?>
        <br><br><br>
        <!--Main Body Starts-->
        <div class="container">
            <div class="card">
                <div class="card-header">
                    Contact Us
                </div>
                <div class="card-body">
                    <h5>We always love hearing from you. <br> just send us a message and we will get back to you as soon as possible</h3>
                    <hr>
                    <p class="card-text"></p>
                    <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username<i class="text-primary">*</i></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email<i class="text-primary">*</i></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email" required>
                    </div>
                
                    <div class="form-group">
                        <label for="exampleInputPassword1">Message</label>
                        <textarea type="" class="form-control" id="exampleInputPassword1" placeholder="Type in your message here..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>

                <div class="card-footer text-muted">
                    <i>Disclaimer - This platform does not serve as a place to get assured steady income as it is based on peer to peer donations</i>
                </div>
            </div>
            <hr>
        </div>
        <!--Mian body ends-->

<?php
    include 'includes/footer.php';
?>        
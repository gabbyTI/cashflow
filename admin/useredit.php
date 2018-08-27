<?php 
 include("inc/header.php")
?>

<body>
    <!--Navigation Bar-->
    <?php 
 include("inc/navbar.php")
?>


   <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-1"><br/>
                <form>
                    <div class="form-group row">

                        <input class="form-control" type="text" placeholder="Input Merged payer" readonly>
                        <br/>
                        <input class="form-control" type="text" placeholder="Input Merged Payees" readonly>
                        <br/>
                        <input class="form-control" type="text" placeholder="Input Merged Payees" readonly>
                        <br/>
                        <input class="form-control" type="text" placeholder="Input Merged Payees" readonly>
                        <br/>
                        <button name="login" value="log" type="submit" class="btn btn-info">Submit</button>
                        <br/>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>














    <?php include("inc/footer.php")?>
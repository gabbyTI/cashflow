<?php require_once("session.php"); ?>
<?php require_once("connection.php"); ?>

<?php 

    $sessionkey = $_SESSION['username'];
    if (isset($_POST['edit'])) {
        $field = "enabled";
    } else {
        $field = "disabled";
    }
    $query = "SELECT * FROM user_details WHERE (username = '{$sessionkey}')";
    $result= mysqli_query($connection,$query);
    if (!$result){
        die("Database connection failed");
    }

    while ($db=mysqli_fetch_row($result)){
        $disid = $db[0];
        $disun = $db[1];
        $disem = $db[3];
        $disphone = $db[4];
    }

?>
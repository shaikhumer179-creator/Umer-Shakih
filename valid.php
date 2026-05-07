<?php
session_start();
error_reporting(0);
include("connection.php");
$email = $_POST['email'];
$password = $_POST['password'];
$select = "Select * from register where email='$email' AND password='$password'";
$result = mysqli_query($conn, query: $select);
$num = mysqli_num_rows($result);
if ($num == 1) {
?>
    <script>
        window.location.href = "index.php";
    </script>
<?php
} else {
    echo "<script>alert('Invalid Login Details');</script>";
    header('location:login.php');
}
?>
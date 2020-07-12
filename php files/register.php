<?php
include('connection.php');
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $username = $_POST["username"]
    $password =$_POST["password"];



$query = "INSERT INTO register_details"
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result > 0)){


    while($row = mysqli_fetch_assoc($result))
}
?>
<?php
include('connection.php');

$query = "SELECT * FROM register_details";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result > 0)){


    while($row = mysqli_fetch_assoc($result))

    echo $row["id"]." ".$row["firstname"]." ".$row["email"]." "."<br>";


}
else {
    echo "Whoops no data to display";
    }
    mysqliclose($conn);
?>
<?php
include("db.php");

if(isset($_POST['save']))
{
$name=$_POST['name'];
$type=$_POST['type'];
$brand=$_POST['brand'];
$price=$_POST['price'];

$sql="INSERT INTO vehicles(vehicle_name,vehicle_type,brand,price_per_day,status)
VALUES('$name','$type','$brand','$price','Available')";

mysqli_query($conn,$sql);

echo "Vehicle Added Successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Vehicle</title>
</head>

<body>

<h2>Add Vehicle</h2>

<form method="POST">

Vehicle Name<br>
<input type="text" name="name"><br><br>

Type<br>
<input type="text" name="type"><br><br>

Brand<br>
<input type="text" name="brand"><br><br>

Price Per Day<br>
<input type="number" name="price"><br><br>

<button name="save">Save Vehicle</button>

</form>

</body>
</html>
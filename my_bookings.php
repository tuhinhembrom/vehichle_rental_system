<?php
session_start();
include("db.php");

if(!isset($_SESSION['user_id']))
{
    header("Location: login.html");
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT b.*, v.vehicle_name
        FROM bookings b
        JOIN vehicles v ON b.vehicle_id = v.id
        WHERE b.user_id = '$user_id'";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>My Bookings</title>
</head>
<body>

<h2>My Bookings</h2>

<table border="1" cellpadding="10">

<tr>
<th>ID</th>
<th>Vehicle</th>
<th>Pickup Date</th>
<th>Return Date</th>
<th>Location</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['vehicle_name']; ?></td>
<td><?php echo $row['pickup_date']; ?></td>
<td><?php echo $row['return_date']; ?></td>
<td><?php echo $row['pickup_location']; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>
<?php
session_start();
include("db.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

$user_id = $_SESSION['user_id'];

$vehicle_id = "";
if (isset($_GET['id'])) {
    $vehicle_id = $_GET['id'];
}

if (isset($_POST['book'])) {

    $vehicle_id = $_POST['vehicle_id'];
    $pickup_date = $_POST['pickup_date'];
    $return_date = $_POST['return_date'];
    $pickup_location = $_POST['pickup_location'];

    $sql = "INSERT INTO bookings(user_id, vehicle_id, pickup_date, return_date, pickup_location)
            VALUES('$user_id','$vehicle_id','$pickup_date','$return_date','$pickup_location')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Booking Successful!');</script>";
    } else {
        echo "<script>alert('Booking Failed!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Book Vehicle</title>

<style>

body{
    font-family:Arial;
    background:#f4f4f4;
}

.container{
    width:500px;
    margin:50px auto;
    background:white;
    padding:25px;
    border-radius:10px;
    box-shadow:0 0 10px gray;
}

h2{
    text-align:center;
}

input{
    width:100%;
    padding:10px;
    margin:10px 0;
}

button{
    width:100%;
    padding:12px;
    background:#ff9800;
    color:white;
    border:none;
    cursor:pointer;
    font-size:18px;
}

button:hover{
    background:#e68900;
}

</style>

</head>
<body>

<div class="container">

<h2>Book Vehicle</h2>

<form method="POST">

<label>Vehicle ID</label>

<input
type="number"
name="vehicle_id"
value="<?php echo $vehicle_id; ?>"
readonly>

<label>Pickup Date</label>

<input
type="date"
name="pickup_date"
required>

<label>Return Date</label>

<input
type="date"
name="return_date"
required>

<label>Pickup Location</label>

<input
type="text"
name="pickup_location"
placeholder="Enter Pickup Location"
required>

<button type="submit" name="book">
Confirm Booking
</button>

</form>

</div>

</body>
</html>
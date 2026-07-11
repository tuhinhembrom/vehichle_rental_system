<?php
include("db.php");

$result = mysqli_query($conn, "SELECT * FROM vehicles");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Available Vehicles</title>
    <style>
        body{
            font-family:Arial, sans-serif;
            background:#f4f4f4;
            margin:40px;
        }

        h2{
            text-align:center;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
        }

        th, td{
            border:1px solid #ddd;
            padding:10px;
            text-align:center;
        }

        th{
            background:#333;
            color:white;
        }

        button{
            background:#ff9800;
            color:white;
            border:none;
            padding:8px 15px;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#e68900;
        }
    </style>
</head>

<body>

<h2>Available Vehicles</h2>

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Type</th>
    <th>Brand</th>
    <th>Price</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['vehicle_name']; ?></td>
    <td><?php echo $row['vehicle_type']; ?></td>
    <td><?php echo $row['brand']; ?></td>
    <td><?php echo $row['price_per_day']; ?> BDT</td>
    <td><?php echo $row['status']; ?></td>
    <td>
        <a href="booking.php?id=<?php echo $row['id']; ?>">
            <button>Book Now</button>
        </a>
    </td>
</tr>

<?php } ?>

</table>

</body>
</html>
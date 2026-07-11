<?php
include("../db.php");

$result=mysqli_query($conn,"SELECT * FROM bookings");
?>

<h2>All Bookings</h2>

<table border="1" cellpadding="10">

<tr>
<th>ID</th>
<th>User</th>
<th>Vehicle</th>
<th>Pickup</th>
<th>Return</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['user_id']; ?></td>
<td><?php echo $row['vehicle_id']; ?></td>
<td><?php echo $row['pickup_date']; ?></td>
<td><?php echo $row['return_date']; ?></td>

</tr>

<?php

}

?>

</table>
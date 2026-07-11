<?php
include("db.php");

$result=mysqli_query($conn,"SELECT * FROM users");
?>

<h2>Registered Users</h2>

<table border="1" cellpadding="10">

<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['fullname']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>

</tr>

<?php

}

?>

</table>
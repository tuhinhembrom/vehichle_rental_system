<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>

<style>

body{
    margin:0;
    font-family:Arial;
    background:#f4f4f4;
}

.header{
    background:#222;
    color:white;
    padding:20px;
    text-align:center;
}

.menu{
    width:220px;
    height:100vh;
    background:#333;
    float:left;
}

.menu a{
    display:block;
    color:white;
    padding:15px;
    text-decoration:none;
}

.menu a:hover{
    background:#ff9800;
}

.content{
    margin-left:220px;
    padding:30px;
}

.card{
    width:220px;
    background:white;
    display:inline-block;
    margin:15px;
    padding:20px;
    border-radius:8px;
    text-align:center;
    box-shadow:0 0 10px gray;
}

</style>

</head>

<body>

<div class="header">
<h1>Vehicle Rental Admin Panel</h1>
</div>

<div class="menu">

<a href="dashboard.php">Dashboard</a>
<a href="add_vehicle.php">Add Vehicle</a>
<a href="bookings.php">Bookings</a>
<a href="users.php">Users</a>
<a href="../logout.php">Logout</a>

</div>

<div class="content">

<div class="card">
<h2>Vehicles</h2>
<p>Manage Vehicles</p>
</div>

<div class="card">
<h2>Bookings</h2>
<p>View Bookings</p>
</div>

<div class="card">
<h2>Users</h2>
<p>Registered Users</p>
</div>

</div>

</body>
</html>
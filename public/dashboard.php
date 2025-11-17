<?php
include 'session_check.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Selamat Datang, <?php echo $_SESSION["username"]; ?></h2>
    <a href="logout.php">Logout</a>
</div>

</body>
</html>

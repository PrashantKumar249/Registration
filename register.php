<?php
session_start();

$name = $_SESSION['name'] ?? '';
$email = $_SESSION['email'] ?? '';
$age = $_SESSION['age'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body style="font-family: Arial; background:lightblue; padding:20px;">
<center>
    <h1>Registration Form</h1>
    <form method="POST" action="save.php">
        <input type="text" name="name" value="<?=htmlspecialchars($name)?>" placeholder="Enter your name" required>
        <br/>
        <br/>
        <input type="email" name="email" value="<?=htmlspecialchars($email)?>" placeholder="Enter your email" required>
        <br/>
        <br/>
        <input type="number" name="age" value="<?=htmlspecialchars($age)?>" placeholder="Enter your age" required>
        <br/>
        <br/>
        <button type="submit">Submit</button>
    </form>
</center>

</body>
</html>
<?php
session_start();

$name = $_SESSION['name'] ?? '';
$email = $_SESSION['email'] ?? '';
$age = $_SESSION['age'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Submitted Data</title>
</head>
<body style="font-family: Arial; background:lightblue; padding:20px;">
<center>
<h1>Submitted Data</h1>

<?php
 if($name || $email || $age):
?>
    <p><strong>Name:</strong> <?= htmlspecialchars($name) ?></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
    <p><strong>Age:</strong> <?= htmlspecialchars($age) ?></p>

    <br>
    <form action="register.php" method="post">
        <button type="submit">Edit</button>
    </form>
    <br/>
    <br/>
    <form action="reset.php" method="post">
    <button type="submit">Reset</button>
</form>

<?php else: ?>
    <p>No data submitted</p>
<?php endif; ?>
</center>
</body>
</html>
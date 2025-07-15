<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = ($conn, $_POST['name'] ?? '');
    $email =($conn, $_POST['email'] ?? '');
    $age = (int)($_POST['age'] ?? 0);
    $id = isset($_POST['id']) && $_POST['id'] !== '' ? (int)$_POST['id'] : 0;

    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['age'] = $age;

    if ($id > 0) {
        $query = "UPDATE users SET name='$name', email='$email', age=$age WHERE id=$id";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Update Error: " . mysqli_error($conn));
        }
    } else {
        $query = "INSERT INTO users (name, email, age) VALUES ('$name', '$email', $age)";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die(" Insert Error: " . mysqli_error($conn));
        }
        $id = mysqli_insert_id($conn);
    }

    $_SESSION['id'] = $id;

    header("Location: view.php");
    exit;
}
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$conn = new mysqli(
    "sql305.infinityfree.com",
    "if0_39270213",
    "qfY7urSMax",
    "if0_39270213_isbul_data"
);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT fullname, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows == 1) {
    $stmt->bind_result($fullname, $hashed_password);
    $stmt->fetch();
    if (password_verify($password, $hashed_password)) {
        $_SESSION['user'] = $fullname;
        $_SESSION['email'] = $email;
        header("Location: ../index.php");
        exit();
    } else {
        echo "Şifre yanlış!";
    }
} else {
    echo "Kullanıcı bulunamadı!";
}
$stmt->close();
$conn->close();
?>
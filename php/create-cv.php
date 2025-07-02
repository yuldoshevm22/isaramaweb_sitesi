<?php
session_start();
$conn = new mysqli("sql305.infinityfree.com", "if0_39270213", "qfY7urSMax", "if0_39270213_isbul_data");
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birthdate = $_POST['birthdate'];
$skills = $_POST['skills'];
$education = $_POST['education'];
$experience = $_POST['experience'];
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

$stmt = $conn->prepare("INSERT INTO cv (user_id, fullname, email, phone, birthdate, skills, education, experience) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssssss", $user_id, $fullname, $email, $phone, $birthdate, $skills, $education, $experience);

if ($stmt->execute()) {
    header("Location: ../kullanici.php?cv=ok");
    exit();
} else {
    echo "Hata: " . $conn->error;
}
$stmt->close();
$conn->close();
?>
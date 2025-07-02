<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Veritabanı bağlantısı
$conn = new mysqli(
    "sql305.infinityfree.com",      // MySQL Host
    "if0_39270213",                 // Kullanıcı adın
    "qfY7urSMax",                   // Veritabanı şifren
    "if0_39270213_isbul_data"       // Veritabanı adın
);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

if (empty($fullname) || empty($email) || empty($password)) {
    die("Lütfen tüm alanları doldurun.");
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Email zaten kayıtlı mı kontrol et
$stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "Bu email zaten kayıtlı!";
} else {
    $stmt = $conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $fullname, $email, $hashed_password);
    if ($stmt->execute()) {
        echo "Kayıt başarılı! <a href='../login.html'>Giriş yap</a>";
    } else {
        echo "Hata: " . $conn->error;
    }
}
$stmt->close();
$conn->close();
?>
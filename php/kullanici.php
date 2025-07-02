<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}
$conn = new mysqli("sql305.infinityfree.com", "if0_39270213", "qfY7urSMax", "if0_39270213_isbul_data");
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$email = $_SESSION['email']; // Girişte email'i de $_SESSION'a kaydedin!
$result = $conn->query("SELECT * FROM cv WHERE email='$email' ORDER BY id DESC LIMIT 1");
$cv = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Kullanıcı Sayfası</title>
</head>
<body>
  <div class="cv-card">
    <h1>Hoşgeldin, <?php echo htmlspecialchars($_SESSION['user']); ?></h1>
    <?php if ($cv): ?>
      <h2>CV Bilgilerin</h2>
      <p><strong>Ad Soyad:</strong> <?php echo htmlspecialchars($cv['fullname']); ?></p>
      <p><strong>Email:</strong> <?php echo htmlspecialchars($cv['email']); ?></p>
      <p><strong>Telefon:</strong> <?php echo htmlspecialchars($cv['phone']); ?></p>
      <p><strong>Doğum Tarihi:</strong> <?php echo htmlspecialchars($cv['birthdate']); ?></p>
      <p><strong>Yetenekler:</strong> <?php echo nl2br(htmlspecialchars($cv['skills'])); ?></p>
      <p><strong>Eğitim:</strong> <?php echo nl2br(htmlspecialchars($cv['education'])); ?></p>
      <p><strong>Deneyim:</strong> <?php echo nl2br(htmlspecialchars($cv['experience'])); ?></p>
    <?php else: ?>
      <p>Henüz bir CV oluşturmadınız.</p>
    <?php endif; ?>
    <a href="../php/logout.php" class="logout-link">Çıkış Yap</a>
  </div>
</body>
</html>
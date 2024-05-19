<?php
$name = $_POST['name'];
$email = $_POST['email'];
$language = $_POST['language'];
$subscribe = isset($_POST['subscribe']) ? 'Evet' : 'Hayır';

echo "<p><strong>Ad Soyad:</strong> $name</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Yazılım Dili:</strong> $language</p>";
echo "<p><strong>E-posta Aboneliği:</strong> $subscribe</p>";
?>

<?php
// Formdan gelen veriler
$email = $_POST['email'];
$password = $_POST['password'];

// Doğru bilgiler 
$valid_email = "b241210052@sakarya.edu.tr";
$valid_password = "b241210052";

// Kontrol
if ($email === $valid_email && $password === $valid_password) {
    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <title>Giriş Başarılı</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <h2>Hoşgeldiniz $password</h2>
        <a href='index.html' class='geri-don-btn'>Ana Sayfaya Dön</a>
    </body>
    </html>";
} else {
    // Hatalıysa login sayfasına dön
    header("Location: login.html");
    exit();
}
?>

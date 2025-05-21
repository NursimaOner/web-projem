<?php
// Formdan gelen veriler
$email = $_POST['email'];
$password = $_POST['password'];

// Doğru bilgiler 
$valid_email = "b241210052@sakarya.edu.tr";
$valid_password = "b241210052";

// Kontrol
if ($email === $valid_email && $password === $valid_password) {
    echo "<h2>Hoşgeldiniz $password</h2>";
} else {
    // Hatalıysa login sayfasına dön
    header("Location: login.html");
    exit();
}
?>

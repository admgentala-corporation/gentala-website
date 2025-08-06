<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_POST) {
    $mail = new PHPMailer(true);
    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'your_gmail@gmail.com'; // Ganti dengan email Anda
        $mail->Password = 'your_gmail_app_password'; // Gunakan App Password Gmail
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Email Content
        $mail->setFrom($_POST['email'], $_POST['nama']);
        $mail->addAddress('admprogentala@gmail.com');
        $mail->Subject = 'Pesan dari Website Gentala';
        $mail->Body = "Nama: ".$_POST['nama']."\nEmail: ".$_POST['email']."\nPesan:\n".$_POST['pesan'];

        $mail->send();
        echo "<script>alert('Pesan berhasil dikirim!'); window.history.back();</script>";
    } catch (Exception $e) {
        echo "<script>alert('Gagal mengirim pesan: {$mail->ErrorInfo}'); window.history.back();</script>";
    }
}
?>

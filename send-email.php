<?php
if($_POST){
    $to = "admprogentala@gmail.com";
    $subject = "Pesan dari Website Gentala";
    $message = "Nama: ".$_POST['nama']."\n";
    $message .= "Email: ".$_POST['email']."\n\n";
    $message .= "Pesan:\n".$_POST['pesan'];

    $headers = "From: ".$_POST['email'];

    if(mail($to, $subject, $message, $headers)){
        echo "<script>alert('Pesan berhasil dikirim!'); window.history.back();</script>";
    } else {
        echo "<script>alert('Gagal mengirim pesan'); window.history.back();</script>";
    }
}
?>

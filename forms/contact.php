<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = urlencode($_POST['name']);
    $subjek = urlencode($_POST['subject']);
    $message = urlencode($_POST['message']);

    // Nomor telepon WhatsApp tujuan
    $phone_number = '087803479806';
    
    // Format pesan untuk dikirim via WhatsApp
    $apiWA = "https://api.whatsapp.com/send?phone=$phone_number&text=Halo%20Admin,%20Saya%20$nama%20ingin%20bertanya%20mengenai%20$subjek.%20$message";

    // Untuk debugging: cetak URL yang dihasilkan
    echo "URL: " . htmlspecialchars($apiWA);
    exit();

    // Redirect ke URL WhatsApp
    // header("Location: $apiWA");
    // exit();
}
?>

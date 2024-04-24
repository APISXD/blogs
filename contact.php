<?php
// Data yang akan dikirim dalam permintaan API Mailgun
$data = [
    'from' => 'crbot5710@gmail.com',
    'to' => 'aditzzff70@gmail.com',
    'subject' => 'Subject of your email',
    'html' => 'Body of your email'
];

// Konfigurasi koneksi cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v3/trial-jpzkmgqq3m2g059v.mlsender.net/messages');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, 'api:mlsn.59474216cae954b7211b4c08492bb9b36bb88d9d580446addbcc01841f1174de'); // Ganti dengan API Key Anda
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/x-www-form-urlencoded'
]);

// Eksekusi permintaan API
$response = curl_exec($ch);

// Cek jika permintaan berhasil atau tidak
if (!$response) {
    echo 'Mailgun API request failed: ' . curl_error($ch);
} else {
    echo 'Email sent successfully!';
}

// Tutup koneksi cURL
curl_close($ch);
?>

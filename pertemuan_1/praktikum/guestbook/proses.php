<?php
$nama = $_POST['nama'];//menyimpan inputan user dengan name inputan nama ke dalam variable $nama
$alamat = $_POST['alamat'];//menyimpan inputan user dengan name inputan alamat ke dalam variable $alamat
$email = $_POST['email'];//menyimpan inputan user dengan name inputan email ke dalam variable $email
$status = $_POST['status'];//menyimpan inputan user dengan name inputan status ke dalam variable $status
$komentar = $_POST['komentar'];//menyimpan inputan user dengan name inputan komentar ke dalam variable $komentar

echo "<head><title>My Guest Book</head></title>";
$fp = fopen("guestbook.txt", "a+");//membuka file guesrbook.txt dalam mode read dan write. dan keyword a+ ini isi dari txt bisa di tempa
fputs($fp, "$nama|$alamat|$email|$status|$komentar\n");//meletakkan hasil inputan usert ke dalam guestbook.txt
fclose($fp);//menutup file guestbook.txt
echo "Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>";
echo "<a href=index.html> Isi Buku Tamu </a><br>";
echo "<a href=lihat.php> Lihat Buku Tamu </a><br>";
?>

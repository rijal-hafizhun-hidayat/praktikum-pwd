<?php
$lokasi_file = $_FILES['fupload']['tmp_name'];//nama file yang berada di dalam direktori temporer server ke dalam variabel $lokasi_file
$nama_file = $_FILES['fupload']['name'];//menyimpan nama file ke dalam variabel $nama_file
$deskripsi = $_POST['deskripsi'];//menyimpan hasil inputan user deksripsi ke dalam variable $deskripsi
$direktori = "E:/xampp/htdocs/pwd/pertemuan_1/praktikum/upload/$nama_file";//menyimpan direktori file
if (move_uploaded_file($lokasi_file, $direktori)) {//memindahkan hasil dari upload file ke dalam direktori yang tersimpan di variable $direktori
    echo "Nama File: <b>$nama_file</b> berhasil di upload <br>";
    echo "Deskripsi File :<br>$deskripsi";
} else {// jika gagal maka akan tampil message di bawah ini
    echo "File gagal diupload";
}
?>
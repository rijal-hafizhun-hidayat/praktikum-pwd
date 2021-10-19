<?php
$myDir = "E:/xampp/htdocs/pwd/pertemuan_1/praktikum/upload/";//nama file yang berada di dalam direktori temporer server ke dalam variabel $myDir yang nantinya akan digunakan untuk download file hasil upload
$dir = opendir($myDir);//menggunakan function opendir() yang berfungsi untuk membuka direktori yang di dalam parameternya berisi lokasi direktori yang akan di buka, menggunakan $myDir sebagai lokasi direktorinya
echo "Isi folder (klik link untuk download : <br>";
while($tmp = readdir($dir)){//function readdir() yang berfungsi untuk membaca file apa saja yang berada di lokasi tersebut, yang kemudian akan di looping sebanyak file yang ada di direktori tersebut
    echo "<a href='$tmp' target='_blank'>$tmp</a><br>";
}
closedir($dir);//menutup direktori yang telah di buka
?>
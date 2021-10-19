<?php
echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "r");//membuka file guestbook.txt dengan mode membaca yang di simbolkan dengan keyword r
echo "<table border=0>";
while ($isi = fgets($fp, 80)) {//menggunakan function fgets yang artinya mengambil value secara barisp dan kemudian di lakukan looping sebanyak panjang 80
    $pisah = explode("|", $isi);//menggunakan function expload yang berfungsi untuk memisahkan string bila menemukan string '|'
    echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";//mengambil isi guestbook.txt dengan index 0
    echo "<tr><td>Alamat </td><td>: $pisah[1]</td></tr>";//mengambil isi guestbook.txt dengan index 1
    echo "<tr><td>Email </td><td>: $pisah[2]</td></tr>";//mengambil isi guestbook.txt dengan index 2
    echo "<tr><td>Status </td><td>: $pisah[3]</td></tr>";//mengambil isi guestbook.txt dengan index 3
    echo "<tr><td>Komentar </td><td>: $pisah[4]</td></tr>
<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";//mengambil isi guestbook.txt dengan index 4
}
echo "</table>";
echo "<a href=index.html> Klik Disini </a>Isi Form Buku Tamu";//mengarak ke page index.html jika di klik
?>
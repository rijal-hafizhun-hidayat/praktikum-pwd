<?php 
    $filecounter = "counter.txt"; //variabel filecounter menyimpan value yaitu counter.txtS
    $fl = fopen($filecounter, "r+");//variabel fl menyimpan value yaitu function fopen dengan paramater vairabel filecounter yang berisi nama file txt dan parameter ke 2 yaitu keyword r+ yang maksudnya adalah Membuka file dalam mode read dan write.function fopen merupakan function yang berfungsi untuk membuka suatu file
    $hit = fread($fl, filesize($filecounter));//variable hit berisi function fread yang berfungsi untuk membaca file yang telah di buka, memberikan 2 paramater. parameter pertaman yaitu nama filenya, menggunakan variable fl sebagai nama filenya yang berisi counter.txt, kemudian parameter ke 2 yaitu function filesize yang berfungsi untuk mengambil size ukuran file

    echo("<table width = 250 align = center border = 1 cellspacing = 0 cellpadding = 0 bordercolor = #0000ff><tr>");//membuat table dengan width 250, align center, border 1, cellspacing 0, cellpadding 0 dan bordercolor berwarna biru
    echo("<td width = 250 valign = middle align = center>");
    echo("<font face = verdena size = 2 color = #ff0000><b>");
    echo("anda pengunjung yang ke: ");
    echo($hit);//mebaca isi teks yang terdapat  dalam file counter.txt
    echo("</b></font>");
    echo("</td>");
    echo("</tr></table>");
    fclose($fl);//menutup file counter.txt

    $fl = fopen($filecounter, "w+");//membuka file counter.txt dengan keyword w+ yang maksudnya adalah Membuka file dalam mode read dan write. Menghapus konten file sebelumnya atau membuat file baru jika belum ada.
    $hit = $hit+1;//melakukan increament
    fwrite($fl, $hit, strlen($hit));//menulis hasil increament ke dalam file counter.txt
    fclose($fl);//menutup file counter.txt
?>
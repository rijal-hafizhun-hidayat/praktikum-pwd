<?php 
    $filecounter = "counter.txt";
    $fl = fopen($filecounter, "r+");
    $hit = fread($fl, filesize($filecounter));

    echo("<table width = 250 align = center border = 1 cellspacing = 0 cellpadding = 0 bordercolor = #0000ff><tr>");
    echo("<td width = 250 valign = middle align = center>");
    echo("<font face = verdena size = 2 color = #ff0000><b>");
    echo("anda pengunjung yang ke: ");
    echo($hit);
    echo("</b></font>");
    echo("</td>");
    echo("</tr></table>");
    fclose($fl);

    $fl = fopen($filecounter, "w+");
    $hit = $hit+1;
    fwrite($fl, $hit, strlen($hit));
    fclose($fl);
?>
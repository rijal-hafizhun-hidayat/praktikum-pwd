<?php 
    echo "<h2>login</h2>
    <form method = post action = cek_login.php>
    <table>
    <tr><td>username</td><td>: <input name = 'id_user' type = 'text'></td></tr>
    <tr><td>password</td><td>: <input name = 'passwd' type = 'text'></td></tr>
    <tr><td>Captcha<br>
    <img src='captcha.php'/></td><td> : <input name='captcha_code' type='text'></td></tr>
    <tr><td colspan = 2><input type = 'submit' value = 'LOGIN'></td></tr>
    </table>
    </form>";
?>
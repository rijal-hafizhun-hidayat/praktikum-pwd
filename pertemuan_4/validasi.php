<!DOCTYPE html>
<html>

<head>
    <title>Title of the document</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>

    <?php
    //define variables and set to empty values
    $namaErr = $emailErr = $genderErr = $websiteErr = "";
    $nama = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['nama'])) {
            $namaErr = "nama harus diisi";
        } else {
            $nama = test_input($_POST['nama']);
        }
        if (empty($_POST['email'])) {
            $emailErr = "email harus di isi";
        } else {
            $email = test_input($_POST['email']);

            //check if e-mail address is ell-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "email tidak sesuai format";
            }
        }
        if (empty($_POST['website'])) {
            $website = "";
        } else {
            $website = test_input($_POST['website']);
        }
        if (empty($_POST['comment'])) {
            $comment = "";
        } else {
            $comment =
                test_input($_POST['comment']);
        }
        if (empty($_POST['gender'])) {
            $genderErr = "gender harus di isi";
        } else {
            $gender = test_input($_POST['gender']);
        }
    }
    if (isset($_POST['submit'])) {
        if ($emailErr != TRUE) {
            tambah_data($nama, $email, $website, $comment, $gender);
        }
    }

    function koneksi()
    {
        $host = "localhost";
        $username = "root";
        $password = "";
        $databasename = "posting_komentar";
        $con = mysqli_connect($host, $username, $password, $databasename);

        return $con;
    }

    function tambah_data($name, $mail, $web, $comm, $gen)
    {
        $konek = koneksi();
        $sql = "INSERT INTO data(nama, email, website, komentar, gender)VALUES('$name', '$mail', '$web', '$comm', '$gen')";
        $hubungkan = mysqli_query($konek, $sql);

        return $hubungkan;
    }

    function tampil_data()
    {
        $konek = koneksi();
        $tampil = "SELECT * FROM data";
        $result = mysqli_query($konek, $tampil);

        return $result;
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    function cek($value){
        if ($value == NULL) {
            echo "tidak ada data";
        }

        return $value;
    }

    ?>

    <h2>Posting Komentar</h2>

    <p><span class="error">* Harus Diisi</span></p>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

        <table>
            <tr>
                <td>Nama: </td>
                <td>
                    <input type="text" name="nama">
                    <span class="error"><?php echo $namaErr; ?></span>
                </td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td>
                    <input type="text" name="email">
                    <span class="error"><?php echo $emailErr; ?></span>
                </td>
            </tr>
            <tr>
                <td>Website</td>
                <td>
                    <input type="text" name="website">
                    <span class="error"><?php echo $websiteErr; ?></span>
                </td>
            </tr>
            <tr>
                <td>Komentar</td>
                <td>
                    <textarea name="comment" cols="40" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="L">Laki-Laki
                    <input type="radio" name="gender" value="P">Perempuan
                    <span class="error">* <?php echo $genderErr; ?></span>
                </td>
            </tr>
            <td>
                <input type="submit" name="submit" value="Submit">
            </td>
        </table>
    </form>

    <table border="1" style="width: 100%;">
        <tr>
            <th>Nama</th>
            <th>E-mail</th>
            <th>Website</th>
            <th>Komentar</th>
            <th>Gender</th>
        </tr>
        <?php
        $hasil = tampil_data();
        while ($user = mysqli_fetch_array($hasil)) { ?>
            <tr>
                <td>
                    <?php echo cek($user['nama']); ?>
                </td>
                <td>
                    <?php echo cek($user['email']); ?>
                </td>
                <td>
                    <?php echo cek($user['website']); ?>
                </td>
                <td>
                    <?php echo cek($user['komentar']); ?>
                </td>
                <td>
                    <?php echo cek($user['gender']); ?>
                </td>
            </tr>
        <?php }
        ?>
    </table>
</body>

</html>

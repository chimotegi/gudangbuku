<html>
<head>
    <title>Daftar Buku</title>
    <style>
    body {
      background-image: url(7.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }
    .main {
      text-align: center;
      width: 300px;
      height: 240px;
      background-color: white;
      margin: 0 auto;
      padding-top: 20px;
      border-radius: 10px;
      border: 1px solid #eeeeee;
    }
    </style>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
    <div class="main">
    <form action="input_buku.php" method="post" name="form1">
        <table width="" border="0" align="center">
            <tr>
                <td>No</td>
                <td><input type="text" name="no_buku"></td>
            </tr>
            <tr>
                <td>Kode Buku</td>
                <td><input type="text" name="kode_buku"></td>
            </tr>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul_buku"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit"></td>
            </tr>
            <tr>
                <td>Detail</td>
                <td><input type="text" name="detail"></td>
            </tr>
            <tr>
                <td>Jenis Buku</td>
                <td><input type="text" name="jenis_buku"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Daftar">
                    <input type="reset" name="reset" value="Reset"</td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $no_buku = $_POST['no_buku'];
        $kode_buku = $_POST['kode_buku'];
        $judul_buku = $_POST['judul_buku'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
        $detail = $_POST['detail'];
        $jenis_buku = $_POST['jenis_buku'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO list_buku(no_buku,kode_buku,judul_buku,pengarang,penerbit,detail,jenis_buku) VALUES ('$no_buku','$kode_buku','$judul_buku','$pengarang','$penerbit','$detail','$jenis_buku')");

        // Show message when user added
        echo "Book added successfully. <a href='list.php'>View Books</a>";
    }
    ?>
</div>
</body>
</html>

<html>
<head>
    <title>Add Users</title>
    <style>
    body {
      background-image: url(7.jpg);
      background-repeat: no-repeat;
      background-size: cover;
    }
    .main {
      text-align: center;
      width: 400px;
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
  <?php
  /**
   * using mysqli_connect for database connection
   */

  $databaseHost = 'localhost';
  $databaseName = 'db_crud';
  $databaseUsername = 'moth';
  $databasePassword = '';

  $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
  $result = mysqli_query($mysqli, "SELECT * FROM list_buku ORDER BY judul_buku");
  ?>
    <a href="index.php">Go to Home</a>
    <br/><br/>
    <div class="main">
    <form action="add.php" method="post" name="form1">
        <table width="" border="0" align='center'>
            <tr>
                <td>Nama</td>
                <td><input type="text" size="30%" name="name" placeholder="---"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" size="30%" name="email" placeholder="---"></td>
            </tr>
            <tr>
                <td>No Handphone</td>
                <td><input type="text" size="30%" name="handphone" placeholder="---"></td>
            </tr>
            <tr>
                <td>Buku</td>
                <td>
                  <div id="container">
                    <form action="" method="">
                      <select name="judul_buku">
                        <option>-- Pilih Buku --</option>
                        <?php if (mysqli_num_rows($result) > 0) { ?>
                            <?php while ($row = mysqli_fetch_array($result)) { ?>
                              <option><?php echo $row['judul_buku'] ?></option>
                            <?php  } ?>
                      <?php  } ?>
                    </select>
                  </form>
                </div>
                </td>
            </tr>
            <tr>
                <td>Tanggal Pinjam</td>
                <td><input type="text" size="30%" name="tglpinjam" placeholder="yyyy-mm-dd"></td>
            </tr>
            <tr>
                <td>Tanggal Kembali</td>
                <td><input type="text" size="30%" name="tglkembali" placeholder="yyyy-mm-dd"</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add">
                    <input type="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
<br><br>
    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $handphone = $_POST['handphone'];
        $judul_buku = $_POST['judul_buku'];
        $tglpinjam = $_POST['tglpinjam'];
        $tglkembali = $_POST['tglkembali'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,handphone,judul_buku,tglpinjam,tglkembali) VALUES('$name','$email','$handphone','$judul_buku','$tglpinjam','$tglkembali')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</div>
</body>
</html>

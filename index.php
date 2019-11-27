<?php
// Create database connection using config file
include_once("config.php");
$no=1;

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>
    <title>Homepage</title>
    <style>
      body{
        font-family: sans-serif;
        font-size: 11pt;
        background-image: url(7.jpg);
        background-size: cover;
      }
      table{
        border: 1px solid white;
        border-collapse: collapse;
        opacity: 0,95;
      }
      th {
        padding: 10px;
        text-align: center;
        background-color: #2980b9;
        color: white;
      }
      tr:nth-child(even){
        background-color: #e8e8e8;
      }
      tr:nth-child(odd){
        background-color: white;
      }
      #header{
        background-color: blue;
      }
      a:link, a:visited {
        background-color: #2980b9;
        color: white;
        padding: 20px 10px;
        text-align: center;
        text-decoration: none;
        display: block;
      }
      a:hover, a:active {
        background-color: #82ccdd;
      }

       td a:link, td a:visited {
        background-color: #2980b9;
        color: white;
        padding: 8px 15px;
        text-align: center;
        text-decoration: none;
        display: block;
      }
      td a:hover, td a:active {
        background-color: #82ccdd;
      }
    </style>
</head>
<link rel="stylesheet" href="style.css">
<script src="java.js" charset="utf-8"></script>

<div id="sidebar">
  <div class="toggle-btn" onclick="toggleSidebar()">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <ul>
    <li><a href="add.php"><b>Add New Person</a></li>
    <li><a href="input_buku.php">Daftar Buku</a></li>
    <li><a href="detail.php">Detail Buku</a></li>
	  <li><a href="list.php">List Buku</a></li>
	  <li><a href="index.php">User Pinjam Buku</a></b></li>
  </ul>
</div>
<body>
  <br><br><br><br><br>
  <center>
    <table id="header" width='80%' border=1>
        <th colspan="9"><h2>Users Pinjam Buku</h2></th>
    <tr>
        <th>No</th>
        <th>Id User</th>
        <th>Nama</th>
        <th>No Handphone</th>
        <th>Email</th>
        <th>Buku</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Update</th>
    </tr>
	</center>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$no;$no++."</td>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['handphone']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['judul_buku']."</td>";
        echo "<td>".$user_data['tglpinjam']."</td>";
        echo "<td>".$user_data['tglkembali']."</td>";
        echo "<td><a href='delete_user.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
    </table>
</body>
</html>

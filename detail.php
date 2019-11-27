<?php
// Create database connection using config file
include_once("config.php");
$no=1;

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM list_buku order by no_buku");
?>

<html>
<head>
    <title>Detail Buku</title>
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
    <li><a href="add.php">Add New Person</a></li>
    <li><a href="input_buku.php">Daftar Buku</a></li>
    <li><a href="detail.php">Detail Buku</a></li>
	<li><a href="list.php">List Buku</a></li>
	<li><a href="index.php">User Pinjam Buku</a></li>
  </ul>
</div>
<body>
  <br><br><br><br><br>
  <center>
    <table width='80%' border=1>
        <th colspan="4"><h2>Detail Buku</h2></th>
    <tr>
        <th width='2%'>No</th>
        <th width='10%'>Kode Buku</th>
        <th width='30%'>Judul Buku</th>
        <th>Tentang</th>
    </tr>
	</center>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['no_buku']."</td>";
        echo "<td>".$user_data['kode_buku']."</td>";
        echo "<td>".$user_data['judul_buku']."</td>";
        echo "<td>".$user_data['detail']."</td>";
    }
    ?>
    </table>
</body>
</html>

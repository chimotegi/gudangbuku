<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");
$result = mysqli_query($mysqli, "DELETE FROM list_buku WHERE no_buku=$id");

// After delete redirect to Home, so that latest user list will be displayed.
if ($result) {
  header("Location:detail.php");
} else {
  echo "Hapus Data Gagal!";
}

?>

<?php
// include database connection file
include_once("configkategori.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM kategori_produk WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:indexkategori.php");
?>
<?php
// Create database connection using config file
include_once("configkategori.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM kategori_produk ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="addkategori.php">Tambah Produk</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Name</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";  
        echo "<td><a href='editkategori.php?id=$user_data[id]'>Edit</a> | <a href='deletekategori.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
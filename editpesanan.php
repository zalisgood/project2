<?php
// include database connection file
include_once("configpesanan.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $tanggal=$_POST['tanggal'];
    $nama=$_POST['nama_pesanan'];
    $alamat=$_POST['alamat_pemesan'];
    $no=$_POST['no_hp'];
    $email=$_POST['email'];
    $stok=$_POST['jumlah_pesanan'];
    $deskripsi=$_POST['deskripsi'];
    $produk=$_POST['produk_id'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE pesanan SET tanggal='$tanggal',nama_pesanan='$nama',no_hp='$no', email='$email', 
    jumlah_pesanan='$stok', deskripsi='$deskripsi', produk_id='$produk' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: testimonial.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM pesanan WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['tanggal'];
    $email = $user_data['nama_pesanan'];
    $mobile = $user_data['alamat_pemesan'];
    $mobile = $user_data['no_hp'];
    $mobile = $user_data['email'];
    $mobile = $user_data['jumlah_pesanan'];
    $mobile = $user_data['deskripsi'];
    $mobile = $user_data['produk_id'];
    
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="testimonial.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="testimonial.php">
        <table border="0">
            <tr> 
                <td>Tanggal</td>
                <td><input type="date" name="tanggal" value=<?php echo $name;?>></td>
            </tr>
            <tr> 
                <td>Nama Pemesan</td>
                <td><input type="text" name="nama_pesanan" value=<?php echo $email;?>></td>
            </tr>
            <tr> 
                <td>Alamat Pemesan</td>
                <td><input type="text" name="alamat_pemesan" value=<?php echo $mobile;?>></td>
            </tr>
            <tr> 
                <td>No HP</td>
                <td><input type="text" name="no_hp" value=<?php echo $mobile;?>></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $mobile;?>></td>
            </tr>
            <tr> 
                <td>Jumlah Pesanan</td>
                <td><input type="text" name="jumlah_pesanan" value=<?php echo $mobile;?>></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value=<?php echo $mobile;?>></td>
            </tr>
            <tr> 
                <td>Produk</td>
                <td><input type="text" name="produk_id" value=<?php echo $mobile;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><button type="Submit" name="update" value="Update">Simpan </button></td>
            </tr>
        </table>
    </form>
</body>
</html>
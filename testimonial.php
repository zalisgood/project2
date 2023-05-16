<?php
ob_start();
// Create database connection using config file
include_once("configpesanan.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM pesanan ORDER BY id ASC");
$date = date('Y/m/d');
// var_dump($date);


if(isset($_POST['Submit'])) {
        $tanggal = $_POST['tanggal'];
        $nama_pemesan = $_POST['nama_pesanan'];
        $alamat = $_POST['alamat_pemesan'];
        $nohp = $_POST['no_hp'];
        $email = $_POST['email'];
        $qty = $_POST['jumlah_pesanan'];
        $deskripsi = $_POST['deskripsi'];
        $produk_id = $_POST['produk_id'];
        
        // include database connection file
        include_once("configpesanan.php");
                
        // Insert user data into table
        $hasil = mysqli_query($mysqli, "INSERT INTO pesanan(tanggal,nama_pesanan,alamat_pemesan,no_hp,email,
        jumlah_pesanan,deskripsi,produk_id) VALUES('$tanggal','$nama_pemesan','$alamat','$nohp','$email','$qty','$deskripsi','$produk_id')");
        
        header("Location:testimonial.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dapur NaiNai Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center bg-secondary py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-envelope fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Us</h6>
                        <span>info@example.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center bg-primary border-inner py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="m-0 text-uppercase text-white">Dapur NaiNai</h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center bg-secondary py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Hubungi Kami</h6>
                        <span>0896-7158-6696</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 text-uppercase text-white"><i class=""></i>Dapur NaiNai</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About Us</a>
                <div class="nav-item dropdown">
                    <a href="menu.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Produk</a>
                    <div class="dropdown-menu m-0">
                        <a href="team.php" class="dropdown-item">Tambah Produk</a>
                        <a href="menu.php" class="dropdown-item">Etalase Produk</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="testimonial.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pesanan</a>
                    <div class="dropdown-menu m-0">
                        <a href="service.php" class="dropdown-item">Tambah Pesanan</a>
                        <a href="testimonial.php" class="dropdown-item">List Pesanan</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact Us</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">Data Pesanan</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">List Pesanan</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-4">
        
        <div class="container">
            <div class="card mt-4">
                <div class="card-header bg-info text-light">
                    Daftar Pesanan
                </div>

                <div class="card-body">
                   <button><a href="service.php">Tambah Pesanan</a><br/></button> <br>
                    <table class="table table-striped table-hover table-bordered">
                        <tr>
                            <th>Tanggal</th>
                            <th>Nama Pemesan</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Email</th>
                            <th>Jumlah Pesanan</th>
                            <th>Deskripsi</th>
                            <th>Produk</th>
                            <th>Aksi</th>
                        </tr>

                        <tr>
                                        <?php  
                                            $no = 1;
                                            foreach ($result as $pesanan) {
                                        ?>
                                            <tr>
                                
                                                <td><?= $pesanan['tanggal'] ?></td>
                                                <td><?= $pesanan['nama_pesanan'] ?></td>
                                                <td><?= $pesanan['alamat_pemesan'] ?></td>
                                                <td><?= $pesanan['no_hp'] ?></td>
                                                <td><?= $pesanan['email'] ?></td>
                                                <td><?= $pesanan['jumlah_pesanan'] ?></td>
                                                <td><?= $pesanan['deskripsi'] ?></td>
                                                <td><?= $pesanan['produk_id'] ?></td>
                                                <td> <a class="btn btn-sm btn-warning" href="editpesanan.php?id=<?=$pesanan['id']?>">Edit</a> <a class="btn btn-sm btn-danger" href="deletepesanan.php?id=<?=$pesanan['id']?>">Delete</a></td>
                                
                                                <?php
                                            $no++;
                                        }       
                                        ?>
                                        </tr>
                    </table>
                </div>
        
                <div class="card-footer bg-info">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    


    <!-- Footer Start -->
    <div class="container-fluid bg-img text-secondary" style="margin-top: 90px">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 mb-lg-n5">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary border-inner p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-uppercase text-white"><i src="img/dpnainai.jpg"></i>Dapur NaiNai</h1>
                        </a>
                        <p class="mt-3">Toko Online Dapur NaiNai adalah sebuah tokoh berbasis online yang akan menemani hari-hari anda dengan mencicipi produk kami. Terimakasih telah percaya kepada toko kami.</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Get In Touch</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Golden Park 3</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">rizalnolimit.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">0896-7158-6696</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Quick Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Produk</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Pelanggan</a>
                                <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                                <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Newsletter</h4>
                            <p>Thank You for support</p>
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-secondary py-4" style="background: #111111;">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Rizal</a>. All Rights Reserved. Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-inner py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
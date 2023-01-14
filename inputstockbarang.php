<?php
include 'database.php';
session_start();
            if (@$_SESSION['username'] == '') {
                echo "<script>
                                    alert('Silahkan Login Dahulu...')
                                    window.location='loginhrd.php';
                                </script>";
            }
if(isset($_POST['submit'])){
    $kode_barang=$_POST['kode_barang'];
    $nama_barang=$_POST['nama_barang'];
    $jenis_barang=$_POST['jenis_barang'];
    $pemasukan=$_POST['pemasukan'];
    $pengeluaran=$_POST['pengeluaran'];
    if(empty($kode_barang) || empty($nama_barang) || empty($jenis_barang) || empty($pemasukan) || empty($pengeluaran)) {	
        echo "<script>alert('Kolom tidak boleh kosong')</script>";
} else {	
      $sql="insert into `tb_barang` (kode_barang,nama_barang,jenis_barang,pemasukan,pengeluaran) values 
      ('$kode_barang','$nama_barang','$jenis_barang','$pemasukan','$pengeluaran')";
      $result=mysqli_query($conn,$sql);
      echo "<script>alert('Data Berhasil Di Submit')</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Input Stok Barang</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                </div>
                <div class="sidebar-brand-text mx-3">HRD</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="homehrd.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="inputdatametal.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Input Data Metal</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="inputstockbarang.php">
                    <i class="fas fa-fw fa-store"></i>
                    <span>Input Stok Barang</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="updatestokbarang.php">
                <i class="fas fa-fw fa-check"></i>
                    <span>Update Stok Barang</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-fw fa-closed-captioning"></i>
                    <span>Logout</span>
                </a>
            </li>


        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul>
                        <li>
                            <h3 style="color: aliceblue; margin-left: 5rem; margin-top: 1rem;">SISTEM INFORMASI
                                INVENTORY BARANG METAL</h3>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->
                <div class="text-center">
                    <span><b>Input</b> Stok Barang</span>
                </div>
                <div style="margin:1rem; text-align:center; justify-content:center;">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Kode barang</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="kode_barang">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama barang</label>
                            <input type="tex" class="form-control" id="exampleFormControlInput1" name="nama_barang">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Jenis barang</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="jenis_barang">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Pemasukan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="pemasukan">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Pengeluaran</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="pengeluaran">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name='submit' value='submit'
                                class="btn btn-outline-success">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- Footer -->
            </div>
        </div>

        <!-- Scroll to top -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="js/ruang-admin.min.js"></script>
        <script src="vendor/chart.js/Chart.min.js"></script>
        <script src="js/demo/chart-area-demo.js"></script>
</body>

</html>
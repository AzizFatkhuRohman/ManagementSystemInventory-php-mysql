<?php
include 'database.php';
session_start();
            if (@$_SESSION['username'] == '') {
                echo "<script>
                                    alert('Silahkan Login Dahulu...')
                                    window.location='logindirektur.php';
                                </script>";
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
    <title>Pemasukan</title>
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
                <div class="sidebar-brand-text mx-3">DIREKTUR</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="datametal.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Metal</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="penerimaan.php">
                    <i class="fas fa-fw fa-chalkboard"></i>
                    <span>Pemasukan</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="pengeluaran.php">
                    <i class="fas fa-fw fa-chalkboard-teacher"></i>
                    <span>Pengeluaran</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="stockbarang.php">
                    <i class="fas fa-fw fa-store"></i>
                    <span>Stok Barang</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="laporan.php">
                    <i class="fas fa-fw fa-chart-pie"></i>
                    <span>Laporan</span>
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
                <div class="user" style="text-align:center; justify-content:center; margin:2rem">
                    <h5>Pemasukan</h5>
                    <div class="text-center">
                        <div class="componenCard"
                            style="margin: 1rem; justify-content: center; display: flex; flex-wrap: wrap;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode Barang</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Jenis Brang</th>
                                        <th scope="col">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <?php
           include 'database.php';
            $result = mysqli_query($conn, "SELECT kode_barang,nama_barang,jenis_barang,pemasukan FROM tb_barang ORDER BY id ASC");
            while($res = mysqli_fetch_array($result))
            {
                      ?>
                                        <td><?php echo $res['kode_barang']?></td>
                                        <td><?php echo $res['nama_barang']?></td>
                                        <td><?php echo $res['jenis_barang']?></td>
                                        <td><?php echo $res['pemasukan']?></td>

                                    </tr>
                                    <?php
          }
          ?>
                                </tbody>
                            </table>
                        </div>
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
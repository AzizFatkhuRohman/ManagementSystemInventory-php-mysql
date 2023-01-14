<?php
include 'database.php';
session_start();
            if (@$_SESSION['username'] == '') {
                echo "<script>
                                    alert('Silahkan Login Dahulu...')
                                    window.location='logindirektur.php';
                                </script>";
            }

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$kode = mysqli_real_escape_string($conn, $_POST['kode']);
	$nama = mysqli_real_escape_string($conn, $_POST['nama']);
	$jenis = mysqli_real_escape_string($conn, $_POST['jenis']);
	$qty = mysqli_real_escape_string($conn, $_POST['qty']);	
	
		//updating the table
		$result = mysqli_query($conn, "UPDATE tb_metal SET kode_barang='$kode',nama_barang='$nama',jenis_barang='$jenis',qty='$qty' WHERE id=$id");
		if($result){
			header("Location: datametal.php");
		}
		//redirectig to the display page. In our case, it is index.php
		
	}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM tb_metal WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$kode = $res['kode_barang'];
	$nama = $res['nama_barang'];
	$jenis = $res['jenis_barang'];
	$qty = $res['qty'];
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
  <title>Update Metal</title>
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
        <a class="nav-link" href="pemasukan.php">
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
              <h3 style="color: aliceblue; margin-left: 5rem; margin-top: 1rem;">SISTEM INFORMASI INVENTORY BARANG METAL</h3>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->
		<div class='text-center'>
			<span><b>Update</b> Metal</span>
		</div>
		<div style="margin:1rem; text-align:center; justify-content:center;">
			<form method="POST" name="form1">
            <div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">Kode Barang</label>
		<input type="text" class="form-control" id="exampleFormControlInput1" name="kode" value="<?php echo $kode?>">
		</div>
		<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
		<input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="<?php echo $nama?>">
		</div>
		<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">Jenis Barang</label>
		<input type="tex" class="form-control" id="exampleFormControlInput1" name="jenis" value="<?php echo $jenis?>">
		</div>
		<div class="mb-3">
		<label for="exampleFormControlInput1" class="form-label">QTY</label>
		<input type="tex" class="form-control" id="exampleFormControlInput1" name="qty" value="<?php echo $qty?>">
		</div>
	
		<div class="mb-3">
		<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
		<input type="submit" class='btn btn-outline-success' name="update" value="Update">
		</div>
		</form>
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

<?php
include 'database.php';
session_start();
            if (@$_SESSION['username'] == '') {
                echo "<script>
                                    alert('Silahkan Login Dahulu...')
                                    window.location='logindirektur.php';
                                </script>";
            }
function fetch_data(){
    $output = '';
    include 'database.php';
    $result = mysqli_query($conn, "SELECT * FROM tb_barang ORDER BY id DESC");
    $no= 1;
    while($res = mysqli_fetch_array($result))
    
    {
        $output.='
        <tr>
                                        
           
                      
                                        <th scope="row">'.$no++.'</th>
                                        <td>'.$res['kode_barang'].'</td>
                                        <td>'.$res['nama_barang'].'</td>
                                        <td><'.$res['jenis_barang'].'</td>
                                        <td>'.number_format($res['pemasukan']).'</td>
                                        <td>'.number_format($res['pengeluaran']).'</td>
                                    </tr>
                                    <?php
          }
          ?>
';

}
return $output;

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print Pdf</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="componenCard" style="margin: 1rem; justify-content: center; display: flex; flex-wrap: wrap;">
        <h5>Laporan</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jenis Brang</th>
                    <th scope="col">Pemasukan</th>
                    <th scope="col">Pengeluaran</th>
                </tr>
            </thead>
            <tbody>
                <?php
                                echo fetch_data();
                                ?>
            </tbody>
        </table>
    </div>
    <script>
    window.print();
    </script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/ruang-admin.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
</body>

</html>
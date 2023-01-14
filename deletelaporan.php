<?php
include 'database.php';
session_start();
            if (@$_SESSION['username'] == '') {
                echo "<script>
                                    alert('Silahkan Login Dahulu...')
                                    window.location='logindirektur.php';
                                </script>";
            }

$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM laporan WHERE id=$id");

header("Location:laporan.php");
?>
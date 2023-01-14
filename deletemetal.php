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
$result = mysqli_query($conn, "DELETE FROM tb_metal WHERE id=$id");

header("Location:datametal.php");
?>
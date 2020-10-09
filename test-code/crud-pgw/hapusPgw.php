<?php
    $id = $_GET['id'];

    require_once('koneksi.php');

    $sql = "DELETE FROM tb_pegawai WHERE id=$id;";

    if(mysqli_query($con,$sql)){
        echo 'Berhasil Menghapus Data Pegawai';
    }
    else {
        echo 'Gagal Menghapus Data Pegawai';
    }

    mysqli_close($con);
?>
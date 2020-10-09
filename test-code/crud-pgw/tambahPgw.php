<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        $desg = $_POST['desg'];
        $sal = $POST['salary'];

        $sqlQuery = "INSERT INTO tb_pegawai (nama,posisi,gaji) VALUES ('$name','$desg','$sal');";

        require_once('koneksi.php');

        if(mysqli_query($con,$sqlQuery)){
            echo ' Berhasil Menambahkan Pegawai';
        }
        else {
            echo 'Gagal Menambahkan Pegawai';
        }

        mysqli_close($con);
    }
?>
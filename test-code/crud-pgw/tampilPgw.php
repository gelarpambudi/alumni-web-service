<?php
    $id = $_GET['id'];

    require_once('koneksi.php');

    $sqlQuery = "SELCET * FROM tb_pegawai WHERE id=$id;";

    $hasilQuery = mysqli_query($con,$sqlQuery);

    $result = array();
    $row = mysqli_fetch_array($hasilQuery);
    array_push($result,array(
        "id"=>$row['id'],
        "name"=>$row['nama'],
        "desg"=>$row['posisi'],
        "salary"=>$row['gaji']
    ));

    echo json_encode(array('result'=>$result));

    mysqli_close($con);
?>
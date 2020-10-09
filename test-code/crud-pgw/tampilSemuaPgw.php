<?php
    require_once('koneksi.php');

    $sqlQuery = "SELECT * FROM tb_pegawai;";
    $hasilQuery = mysqli_query($con,$sqlQuery);
    $result = array();
    

    while($row = mysqli_fetch_array($hasilQuery)){
        array_push($result,array(
        "id"=>$row['id'],
        "name"=>$row['nama']
        ))
    }

    echo json_encode(array('result'=>$result));

    mysqli_close($con);
?>
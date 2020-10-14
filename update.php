<?php
require_once('connection.php');

if($_SERVER['REQUEST_METHOD']=='POST') {

  $response = array();
  
  $nama = $_POST['nama'];
  $angkatan = $_POST['angkatan'];
  $nomor_hp = $_POST['nomor_hp'];
  $email = $_POST['email'];

  $sql = "UPDATE alumni_et SET angkatan = '$angkatan', nomor_hp = '$nomor_hp', email='$email' WHERE nama = '$nama'";
  if(mysqli_query($con,$sql)) {
    $response["value"] = 1;
    $response["message"] = "Berhasil diperbarui";
    echo json_encode($response);
  } else {
    $response["value"] = 0;
    $response["message"] = "oops! Gagal merubah!";
    echo json_encode($response);
  }
  mysqli_close($con);
}
?>
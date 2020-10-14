<?php
require_once('connection.php');
if($_SERVER['REQUEST_METHOD']=='POST') {

  $search = $_POST['search'];
  $sql = "SELECT * FROM alumni_et where nama LIKE '%$search%' ORDER BY nama ASC";
  $res = mysqli_query($con,$sql);
  $result = array();
  while($row = mysqli_fetch_array($res)){
    array_push($result, array('nama'=>$row[0], 'angkatan'=>$row[1], 'nomor_hp'=>$row[2], 'email'=>$row[3]));
  }
  echo json_encode(array("value"=>1,"result"=>$result));
  mysqli_close($con);
}
?>
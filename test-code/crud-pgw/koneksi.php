<?php

 define('HOST','localhost');
 define('USER','gelar');
 define('PASS',' ');
 define('DB',' ');
 
 //membuat koneksi dengan database
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
 
 ?>
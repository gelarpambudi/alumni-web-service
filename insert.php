<?php
    if($_SERVER['REQUEST_METHOD']=='POST') {

        $response = array();
        
        if (isset( $_POST['nama']) && isset( $_POST['angkatan'])) {

            $nama = $_POST['nama'];
            $angkatan = $_POST['angkatan'];
            $no_hp = $_POST['no_hp'];
            $email = $_POST['email'];
        
            require_once('connection.php');
            
            $sql = "SELECT * FROM alumni_et WHERE nama ='$nama'";
            $check = mysqli_fetch_array(mysqli_query($con,$sql));

            if(isset($check)){

            $response["value"] = 0;
            $response["message"] = "Nama anda sudah terdaftar!";
            echo json_encode($response);

            } else {

                $sql = "INSERT INTO alumni_et (nama, angkatan, nomor_hp, email) VALUES('$nama','$angkatan','$no_hp','$email')";

                if(mysqli_query($con,$sql)) {

                    $response["value"] = 1;
                    $response["message"] = "Sukses mendaftar";
                    echo json_encode($response);

                } else {
                    $response["value"] = 0;
                    $response["message"] = "Gagal mendaftar, silakan coba lagi!";
                    echo json_encode($response);
                }
            }

            mysqli_close($con);
                
        } 
        else {

            $response["value"] = 0;
            $response["message"] = "Input gagal, silakan coba lagi!";
            echo json_encode($response);
        }

    } else {

       $response["value"] = 0;
       $response["message"] = "Koneksi gagal, silakan coba lagi!";
       echo json_encode($response);
       
    }
  
 ?>
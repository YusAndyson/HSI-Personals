<?php 

    include 'db_conn.php';
    
    $           = $_POST['nama'];
    $email          = $_POST['email'];
    $alamat         = $_POST['alamat'];
    $whatsapp       = $_POST['whatsapp'];

    $query = "INSERT INTO siswa (nama,email,alamat,whatsapp) VALUES ('$nama','$email','$alamat','$whatsapp')";

    $result = mysqli_query($koneksi,$query);

    if ($result) {
        header ('location: index.php');
    } else{
        echo 'data gagal ditambah';
    }
?>
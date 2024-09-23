<?php 

    include 'db_conn.php';
    
    $name           = $_POST['name'];
    $email          = $_POST['email'];
    $telp           = $_POST['telp'];
    $service        = $_POST['service'];
    $message        = $_POST['message'];

    $query = "INSERT INTO hardware (name,email,telp,service,message) VALUES ('$name','$email','$telp','$service','$message')";

    $result = mysqli_query($conn,$query);

    if ($result) {
        header ('location: hardware.php');
        echo '<script type="text/javascript"> alert("Pesanan Diterima") </script>';
    } else{
        echo 'data gagal ditambah';
    }
?>
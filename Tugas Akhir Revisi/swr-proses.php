<?php 

    include 'db_conn.php';
    
    $name           = $_POST['name'];
    $email          = $_POST['email'];
    $telp           = $_POST['telp'];
    $service        = $_POST['service'];
    $massage        = $_POST['massage'];

    $query = "INSERT INTO software (name,email,telp,service,massage) VALUES ('$name','$email','$telp','$service','$massage')";

    $result = mysqli_query($conn,$query);

    if ($result) {
        header ('location: software.php');
        echo '<script type="text/javascript"> alert("Pesanan Diterima") </script>';
    } else{
        echo 'data gagal ditambah';
    }
?>
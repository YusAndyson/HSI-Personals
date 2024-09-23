<?php  

    include 'db_conn.php';

    $id = $_POST['id'];

    $query = "DELETE FROM kontak WHERE id ='$id'";
    $result = mysqli_query($conn,$query);

    if ($result) {
        header('location: kontak.php');
    } else {
        echo "Data gagal dihapus";
    }   

?>
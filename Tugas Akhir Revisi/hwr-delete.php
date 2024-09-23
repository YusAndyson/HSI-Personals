<?php  

    include 'db_conn.php';

    $id = $_POST['id'];

    $query = "DELETE FROM hardware WHERE id ='$id'";
    $result = mysqli_query($conn,$query);

    if ($result) {
        header('location: hardware.php');
    } else {
        echo "Data gagal dihapus";
    }   

?>
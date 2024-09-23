<?php  

    include 'db_conn.php';

    $id = $_POST['id'];

    $query = "DELETE FROM software WHERE id ='$id'";
    $result = mysqli_query($conn,$query);

    if ($result) {
        header('location: software.php');
    } else {
        echo "Data gagal dihapus";
    }   

?>
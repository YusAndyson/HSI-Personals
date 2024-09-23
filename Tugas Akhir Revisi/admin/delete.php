<?php  

    include 'db_conn.php';

    $id = $_POST['id'];

    $query = "DELETE FROM users WHERE id ='$id'";
    $result = mysqli_query($conn,$query);

    if ($result) {
        header('location: user.php');
    } else {
        echo "Data gagal dihapus";
    }   

?>
<?php 
		include 'db_conn.php';
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['file']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($image, 'file/'.$nama);
					$query = mysql_query("INSERT INTO divition VALUES(NULL, '$nama')");
					if($query){
						echo 'FILE BERHASIL DI UPLOAD';
					}else{
						echo 'GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo 'UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
		}


    include 'db_conn.php';
    
    $image           = $_POST['image'];
    $header         = $_POST['header'];
    $description     = $_POST['description'];
    $social        = $_POST['social'];

    $query = "INSERT INTO divition (image,header,description,social,) VALUES ('$image','$header','$description','$social')";

    $result = mysqli_query($conn,$query);

    if ($result) {
        header ('location: home.php');
        echo '<script type="text/javascript"> alert("Pesanan Diterima") </script>';
    } else{
        echo 'data gagal ditambah';
    }

?>
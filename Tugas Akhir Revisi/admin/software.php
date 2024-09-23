<?php
    include 'db_conn.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HumanSyNTax; - Admin/Software</title>

    <!-- <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="contact.php">  -->

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Personal CSS -->
    <link rel="stylesheet" href="hardware.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@500&display=swap" rel="stylesheet"> 
</head>
<body>
    <!-- sidebar -->
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>HumanSy<span>NT</span>ax</header>
      <a href="./user.php">
        <i class="fas fa-qrcode"></i>
        <span>User</span>
      </a>
      <a href="./kontak.php" >
        <i class="fas fa-link"></i>
        <span>Contact</span>
      </a>
      <a href="./hardware.php" >
        <i class="fas fa-stream"></i>
        <span>Hardware</span>
      </a>
      <a href="./software.php" class="active">
         <i class="fas fa-calendar"></i>
        <span>Software</span>
      </a>
    </div>

  <div class="container">
        <div class='col-10 m-auto'>
            <h1 style="font-family: 'Antonio', sans-serif;">Software Pesan</h1>
            <!-- <a href="create.php" class='btn btn-primary'>Tambah</a> -->
            <table class='table table-hover table-bordered table-light mt-3'>
                <thead>
                    <tr>
                        <th scope='col'>ID</th>
                        <th scope='col'>Nama</th>
                        <th scope='col'>Email</th>
                        <th scope='col'>Telepon</th>
                        <th scope='col'>Services</th>
                        <th scope='col'>Pesan</th>
                        <th scope='col'>Status</th>
                        <th scope='col'>Action</th>
                    </tr>
                </thead>
                <?php
                    $query = 'SELECT * FROM software';
                    $result = mysqli_query($conn,$query);

                    $no = 1;
                    while ($data = mysqli_fetch_array($result)) {
                ?>
                <tbody>
                    <tr>
                        <td scope='row'><?= $no++?></td>
                        <td scope='row'><?= $data ['name']?></td>
                        <td scope='row'><?= $data ['email']?></td>
                        <td scope='row'><?= $data ['telp']?></td>
                        <td scope='row'><?= $data ['service']?></td>
                        <td scope='row'><?= $data ['massage']?></td>
                        <td scope='row'><?= $data ['status']?></td>
                        <td scope='row'>
                          <form class="d-inline" action="swr-delete.php" method="post">
                            <input type="hidden" name="id" value="<?= $data['id']?>">
                            <button class="btn btn-danger">Delete</button>
                          </form>
                          <a href="./software-edit.php?id=<?= $data['id']?>" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                </tbody>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Personal CSS -->
    <link rel="stylesheet" href="./css/pesanan.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet"> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@500&display=swap" rel="stylesheet">
</head>
<body>

    <!-- sidebar -->
    <input type="checkbox" id="check">
    <label for="check">
      <i style="background-color: white;" class="fas fa-bars" id="btn"></i>
      <i style="background-color: white;" class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>HumanSy<span>NT</span>ax</header>
      <a href="./home.php">
        <i class="fas fa-qrcode"></i>
        <span>Home</span>
      </a>
      <a href="./hardware.html" class="active">
        <i class="fas fa-link"></i>
        <span>Hardware</span>
      </a>
      <a href="./software.php">
        <i class="fas fa-stream"></i>
        <span>Software</span>
      </a>
      <a href="#">
         <i class="fas fa-calendar"></i>
        <span>Merchandise</span>
      </a>
    </div>

    <!-- content 1 -->
    <h4>Nama :</h4>
    <h1></h1>
    <h4>Telpon :</h4>
    <h1></h1>
    <h4>Email :</h4>

    <table class='table table-hover table-bordered table-light mt-3'>
                <thead>
                    <tr>
                        <th scope='col'>ID Users</th>
                        <th scope='col'>Service</th>
                        <th scope='col'>Pesan</th>
                        <th scope='col'>Action</th>
                    </tr>
                </thead>
                <?php
                    $query = 'SELECT * FROM ';
                    $result = mysqli_query($conn,$query);

                    $no = 1;
                    while ($data = mysqli_fetch_array($result)) {
                ?>
                <tbody>
                    <tr>
                        <td scope='row'><?= $no++?></td>
                        <td scope='row'><?= $data ['user_name']?></td>
                        <td scope='row'><?= $data ['password']?></td>
                        <td scope='row'>
                          <form class="d-inline" action="delete.php" method="post">
                            <input type="hidden" name="id" value="<?= $data['id']?>">
                            <button class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                    </tr>
                </tbody>
                <?php
                    }
                ?>
            </table>
</body>
</html>
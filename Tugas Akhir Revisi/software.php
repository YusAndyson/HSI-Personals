<?php
include 'db_conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HumanSyNTax; - Software</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- Personal CSS -->
    <link rel="stylesheet" href="./css/software.css">

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
      <a href="./hardware.php">
        <i class="fas fa-link"></i>
        <span>Hardware</span>
      </a>
      <a href="./software.php" class="active">
        <i class="fas fa-stream"></i>
        <span>Software</span>
      </a>
    </div>

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid bg-dark">
      <div class="container">
        <!-- <h1 class="display-4">Fluid jumbotron</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
        <div data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000" class="row align-items-center">
          <div class="col col-md-6">
            <h1 style="padding: 20px;">HumanSy<span class="jaringan">NT</span>ax <br> <span class="aplikasi">INTERCONNECTED</span></h1>
          </div>
          <div class="col img col-md-6">
            <h3>Software Services</h3>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>

    <!-- content 1 -->
    <table class="container">
      <tr>
        <td width="65%">
          Selamat datang di layanan software! Disini kamu bisa memilih kebutuhan sesuai yang kamu inginkan dengan pilihan yang beragam tentunya. Projek kamu akan di handle dengan orang yang ahli di bidangnya jadi, jangan khawatir. kami juga menyediakan garansi 100% jika hasilnya tidak sesuai keinginan. Kamu juga dibebaskan untuk berdiskusi dengan handler kami terkait pesanan kamu.  
          </p>
        </td>
        <td>
        <div class="col">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./assets/2.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Gedung Jurusan</h5>
                    <p>Berikut adalah tampak depan dari gedung SIJA</p> -->
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="./assets/3.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Lorong Menuju Ruang networking</h5>
                    <p>Berikut ini adalah lorong menuju ruang networking tau dikenal dengan N.01.</p> -->
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="./assets/4.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Ruang Networking</h5>
                    <p>Berikut tampak depan dari ruang networking.</p> -->
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="./assets/5.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Ruang Software</h5>
                    <p>Tampak depan dari ruang software atau biasa disebut N.04.</p> -->
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="./assets/2.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Ruang Serbaguna</h5>
                    <p>Tampak depan dari ruang serbaguna atau biasa disebut N.03.</p> -->
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="./assets/4.png" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Ruang Cisco</h5>
                    <p>Tampak depan dari ruangs cisco atau biasa disebut N.05.</p> -->
                  </div>
                </div>
              </div>
              <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button> -->
            </div>
          </div>
        </div>
        </td>
      </tr>
    </table>

    <!-- <table class="container">
      <tr>
        <td>
          <div class="card" style="width: 18rem;">
            <img src="./assets/WhatsApp Image 2022-11-12 at 06.52.33.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Stevan</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </td>
        <td>
          <div class="card" style="width: 18rem;">
          <img src="./assets/WhatsApp Image 2022-11-12 at 06.52.33.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Jack</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
          </div>
        </td>
        <td>
        <div class="card" style="width: 18rem;">
          <img src="./assets/WhatsApp Image 2022-11-12 at 06.52.33.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Marco</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
          </div>
        </td>
        <td>
        <div class="card" style="width: 18rem;">
          <img src="./assets/WhatsApp Image 2022-11-12 at 06.52.33.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Julian</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        </td>
      </tr>
    </table>

    <br>
    <br>

    <div class="card container">
      <div class="card-header">
        Featured
      </div>
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-warning">Go somewhere</a>
      </div>
  </div>
  <br>
  <div class="card container">
    <div class="card-header">
      Featured
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="#" class="btn btn-warning">Go somewhere</a>
    </div>
  </div>
  <br>
  <div class="card container">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-warning">Go somewhere</a>
  </div>
</div>
<br>
<div class="card container">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-warning">Go somewhere</a>
  </div>
</div>
<br>
<div class="card container">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-warning">Go somewhere</a>
  </div>
</div>
<br>
<div class="card container">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-warning">Go somewhere</a>
  </div>
</div> -->

<br>
<br>

<div class="container menu" style="display: flex;">
  <div style="background-color: rgb(236, 184, 41); border-radius: 10px; width: 350px; padding: 5px; margin-right: 10px;">
    <h4 style="background-color: black; padding: 3px; color: white;">Web</h4>
    <p>
      Pembuatan web statis maupun dinamis sesuai keinginan customer. Tersedia berbagai model dan template. Seperti Portofolio, Kasir, Absensi, dll plus dengan hosting.
    </p>
  </div>

  <div style="background-color: rgb(236, 184, 41); border-radius: 10px; width: 350px; padding: 5px; margin-right: 10px;">
    <h4 style="background-color: black; padding: 3px; color: white;">CV / ID Card</h4>
    <p>
      Pembuatan CV digital maupun fisik sesuai request customer serta pembuatan ID Card pribadi maupun instansi. Kamu bisa memilih Smart ID Card maupun ID Card standar.
    </p>
  </div>

  <div style="background-color: rgb(236, 184, 41); border-radius: 10px; width: 350px; padding: 5px; margin-right: 10px;">
    <h4 style="background-color: black; padding: 3px; color: white;">Desain</h4>
    <p>
      Layanan berupa desain bangunan maupun no-bangunan. Seperti desain 3d/2d(cangkir, tumbler, kemasan, gambar. dll). Kamu juga bisa memesan desain arsitektur ruangan.
    </p>
  </div>

  <div style="background-color: rgb(236, 184, 41); border-radius: 10px; width: 350px; padding: 5px; margin-right: 10px;">
    <h4 style="background-color: black; padding: 3px; color: white;">Instalation</h4>
    <p>
      Layanan instalasi software maupun jaringan. anda bisa memilih MS Office, Adobe product, dll serta dapat menginstalasi jaringan internet sesuai kebutuhan anda. kami juga menyediakan layanan hosting
    </p>
  </div>

  <div style="background-color: rgb(236, 184, 41); border-radius: 10px; width: 350px; padding: 5px; margin-right: 10px;">
    <h4 style="background-color: black; padding: 3px; color: white;">Course</h4>
    <p>
      Layanan kursus dibidang IT yang bekerjasama dengan IT Club SMKN 26 Jakarta. yang tersedia kursus di bidang web-dev, nerworking, desain, software, dll. Nda bisa request apakah offline/online.
    </p>
  </div>
</div>

<br>
<br>
<br>

<center>
<h4 class="btn btn-outline-warning">
 <a href="./swr-form.php" style="text-decoration: none; color:black;">Berlangganan</a> 
</h4>
</center>

<br>
<br>
<br>

<!-- content 1 -->
<div class="container">
<?php
                    $query = 'SELECT * FROM software';
                    $result = mysqli_query($conn,$query);

                    $no = 1;
                    while ($data = mysqli_fetch_array($result)) {
                ?>

    <h4 style="color:grey;">Nama :</h4>
    <h1><?= $data ['name']?></h1>
    <h4 style="color:grey;">Telpon :</h4>
    <h1><?= $data ['telp']?></h1>
    <h4 style="color:grey;">Email :</h4>
    <h1><?= $data ['email']?></h1>
    <br>
    <br>
    <center>
      <h4 style="color: grey;">Feedback :</h4>
      <h1><?= $data ['status']?></h1>
    </center>
    <br>
    <br>
    <?php
                    }
                ?>

    <table class='table table-dark mt-3'>
                <thead>
                    <tr>
                        <!-- <th scope='col'>ID Users</th>
                        <th scope='col'>Service</th>
                        <th scope='col'>Pesan</th>
                        <th scope='col'></th> -->
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
                        <td scope='row'><?= $data ['service']?></td>
                        <td scope='row'><?= $data ['massage']?></td>
                        <!-- <td scope='row'>
                          <form class="d-inline" action="./admin/hwr-delete.php" method="post">
                            <input type="hidden" name="id" value="<?= $data['id']?>">
                            <button class="btn btn-danger">Batalkan Pesanan</button>
                          </form>
                        </td> -->
                    </tr>
                    <form class="d-inline" action="swr-delete.php" method="post">
                            <input type="hidden" name="id" value="<?= $data['id']?>">
                            <button class="btn btn-danger">Batalkan Pesanan</button>
                    </form>
                </tbody>
                <?php
                    }
                ?>
            </table>
            </div>
<br>
<br>
<br>            

<!-- footer -->
<center>
  <div class="footer">
  <p>©HumanSyNTax.Int 2022</p>
  <a href="">powered by <span>HSI</span></a>
  </div>
</center>

<br>
<br>

</body>
</html>
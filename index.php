<html>

<head>
  <title>Web Programming - Book Store</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
  <link rel="stylesheet" type="text/css" href="./assets/css/color.css" />
  <link rel="stylesheet" type="text/css" href="./assets/css/layer.css" />
  <link rel="stylesheet" type="text/css" href="./assets/css/font.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="navbar grey">
      <div class="container">
        <div class="item--flex flex--space-between">
          <div class="item__logo">
            <img class="image__logo" src="./assets/image/logo-binus.png" alt="Logo Binus" />
          </div>
          <div class="item__nav">
            <ul class="nav pa-3">
              <li class="nav-item mr-3">
                <a class="nav-item-anchor primary--text font-weight-bold" href='#'>Home</a>
              </li>
              <li class="nav-item mr-3">
                <a class="nav-item-anchor primary--text font-weight-bold" href='#'>About</a>
              </li>
              <li class="nav-item">
                <a class="nav-item-anchor primary--text font-weight-bold" href='login.php'>Login</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Section Header -->
    <div class="container">
      <div class="header item--flex flex--direction-column">
        <div class="header--left">
          <h1>
            <span class="heading__title primary--text">Penjualan Buku</span>
            <br />
            <span class="heading__title-head secondary--text">Online.</span>
          </h1>
          <p class="heading__text-desc body-1 black70--text">
            Toko Buku Online yang menyediakan aneka buku berkualitas dan
            terlengkap. Nikmati promo buku murah dengan pengiriman beragam
          </p>
          <a class="caption text--decoration-none font-weight-bold primary--text" href="#">Baca Selengkapnya >
          </a>
        </div>
        <div class="header--right">
          <img class="image__header" src="./assets/svg/header.svg" alt="Header" />
        </div>
      </div>
    </div>
    <!-- End Section Header -->

    <!-- Section Biodata -->
    <div class="biodata pa-2 primary">
      <div class="container">
        <div class="white--text">
          <h2 class="mb-0">Biodata</h2>
          <p class="body-2">Penjualan buku online dibuat oleh 4 superhero yang bertujuan untuk mempermudah user mencari
            buku</p>
        </div>
        <div class="item--flex item__responsive">
          <div class="card border-radius8 pa-2 mr-2 mt-2 white">
            <img class="image__avatar image--rounded image--center"
              src="https://pbs.twimg.com/profile_images/988775660163252226/XpgonN0X_400x400.jpg" alt="Rendi Simamora" />
            <p class="font-weight-bold mb-0">Rendi Simamora</p>
            <p class="body-2">CEO Bukuonline</p>
            <p class="caption black70--text">
              William Henry "Bill" Gates III adalah seorang tokoh bisnis,
              investor, filantropis, penulis asal Amerika Serikat, serta
              mantan CEO yang saat ini menjabat sebagai ketua Microsoft,
              perusahaan perangkat lunak yang ia dirikan bersama Paul Allen
            </p>
          </div>

          <div class="card border-radius8 pa-2 mr-2 mt-2 white">
            <img class="image__avatar image--rounded image--center"
              src="https://pbs.twimg.com/profile_images/988775660163252226/XpgonN0X_400x400.jpg" alt="Rendi Simamora" />
            <p class="font-weight-bold mb-0">Rendi Simamora</p>
            <p class="body-2">CEO Bukuonline</p>
            <p class="caption black70--text">
              William Henry "Bill" Gates III adalah seorang tokoh bisnis,
              investor, filantropis, penulis asal Amerika Serikat, serta
              mantan CEO yang saat ini menjabat sebagai ketua Microsoft,
              perusahaan perangkat lunak yang ia dirikan bersama Paul Allen
            </p>
          </div>

          <div class="card border-radius8 pa-2 mr-2 mt-2 white">
            <img class="image__avatar image--rounded image--center"
              src="https://pbs.twimg.com/profile_images/988775660163252226/XpgonN0X_400x400.jpg" alt="Rendi Simamora" />
            <p class="font-weight-bold mb-0">Rendi Simamora</p>
            <p class="body-2">CEO Bukuonline</p>
            <p class="caption black70--text">
              William Henry "Bill" Gates III adalah seorang tokoh bisnis,
              investor, filantropis, penulis asal Amerika Serikat, serta
              mantan CEO yang saat ini menjabat sebagai ketua Microsoft,
              perusahaan perangkat lunak yang ia dirikan bersama Paul Allen
            </p>
          </div>

          <div class="card border-radius8 pa-2 mr-2 mt-2 white">
            <img class="image__avatar image--rounded image--center"
              src="https://pbs.twimg.com/profile_images/988775660163252226/XpgonN0X_400x400.jpg" alt="Rendi Simamora" />
            <p class="font-weight-bold mb-0">Rendi Simamora</p>
            <p class="body-2">CEO Bukuonline</p>
            <p class="caption black70--text">
              William Henry "Bill" Gates III adalah seorang tokoh bisnis,
              investor, filantropis, penulis asal Amerika Serikat, serta
              mantan CEO yang saat ini menjabat sebagai ketua Microsoft,
              perusahaan perangkat lunak yang ia dirikan bersama Paul Allen
            </p>
          </div>
        </div>
      </div>
      <!-- End Section Biodata -->
    </div>

    <!-- Section Book -->
    <div class="section__book grey pa-2">
      <div class="container">
        <h2 class="mb-0">Buku Tersedia</h2>
        <div class="item--flex flex--direction-column mt-2" style="flex-wrap: wrap;">
          <?php 
            include "./action/connect.php"; 
            $sql="SELECT * FROM book";
            $data = mysqli_query($conn,$sql);
            while($row = $data->fetch_assoc()){ 
          ?>
          <div class="card mt-2">
            <div class="item--flex">
              <div class="card__image">
                <img class="image__book" src="<?php echo $row['pict']?>" alt="Book 1" />
              </div>
              <div class="card__information grey pa-2 border-radius8">
                <p class="title mb-0 font-weight-bold"><?php echo $row['title']?></p>
                <p class="subheading mb-0 secondary--text font-weight-bold">RP <?php echo $row['price']?></p>
                <p class="caption font-italic"><?php echo $row['description']?> </p>
              </div>
            </div>
          </div>
          <?php }?>

        </div>

      </div>

    </div>
    <!-- End Section Book -->

    <!-- Section Footer -->
    <div class="footer primary pa-2">
      <div class="container">
        <div class="item--flex ">
          <div class="form white mr-2 flex-1 border-radius8">
            <div class="pa-2">
              <form action="./action/insertTamu.php">
                <input type="text" class="form-control" name="fullname" placeholder="Masukan nama kamu" required />

                <input type="email" class="form-control" name="email" placeholder="Masukan email kamu" required />

                <input type="submit" class="body-2 font-weight-bold form-control white--text primary" name="submit"
                  value="Kirim" />
              </form>
            </div>
          </div>
          <div class="footer__info flex-1">
            <div class="white--text">
              <h2>Buku Tamu</h2>
              <p class="body-2">Masukan nama dan email kamu untuk mendapatkan informasi terbaru terkait bookstore.
                karna
                setiap harinya
                kami memliki informasi yang menarik</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Section Footer -->
    <div class="footer pa-2 primary--dark">
      <p class="text-center white--text">2019 Copyright</p>
    </div>
  </div>
</body>
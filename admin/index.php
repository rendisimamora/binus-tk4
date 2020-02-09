<?php 
include "../action/connect.php"; 

session_start();
if($_SESSION['status']!="login"){
  header("location:../index.php");
}

$sqlUsers="SELECT * FROM users";
$dataUsers = mysqli_query($conn,$sqlUsers);
$countUsers = mysqli_num_rows($dataUsers);

$sqlBook="SELECT * FROM book";
$dataBook = mysqli_query($conn,$sqlBook);
$countBook = mysqli_num_rows($dataBook);

$sqlTamu="SELECT * FROM tamu";
$dataTamu = mysqli_query($conn,$sqlTamu);
$countTamu = mysqli_num_rows($dataTamu);


?>

<?php include "partial/head.php"; ?>

<body class="">
  <?php include"partial/sidebar.php"?>
  <div class="main-content">
    <!-- Navbar -->
    <?php include"partial/navbar-header.php"?>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <h1 class="text-white">Hi
          <span class="text-capitalize">
            <?php echo $_SESSION['username']?>
          </span>
        </h1>
        <p class="text-white">
          Yesterday I was clever, so I wanted to change the world. Today I am
          wise, so I am changing myself.
        </p>
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-4 col-lg-4">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">
                        users
                      </h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $countUsers;?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap">All Users</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">
                        Book
                      </h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $countBook; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap">All Books</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">
                        Tamu
                      </h5>
                      <span class="h2 font-weight-bold mb-0">
                        <?php echo $countTamu;?>
                      </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-inbox"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap">Daftar Tamu</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "partial/footer.php";?>
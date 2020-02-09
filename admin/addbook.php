<?php 
    include "../action/connect.php"; 
    include "partial/head.php";
    session_start();
    if($_SESSION['status']!="login"){
      header("location:../index.php");
    }
    $sql="SELECT * FROM book";
    $data = mysqli_query($conn,$sql);
?>

<body class="">
  <?php include"partial/sidebar.php"?>
  <div class="main-content">
    <!-- Navbar -->
    <?php include"partial/navbar-header.php"?>
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
      </div>
    </div>
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3>Add Book</h3>
              <form action="../action/insertBook.php">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="title" class="form-control" placeholder="Title" required>
                    </div>
                    <div class="form-group">
                      <input type="number" name="price" class="form-control" placeholder="Price" required>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="description" rows="3" placeholder="Description"
                        required></textarea>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Add Book</button>
                    </div>

                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "partial/footer.php";?>
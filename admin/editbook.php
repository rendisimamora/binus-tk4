<?php 
    include "../action/connect.php"; 
    include "partial/head.php";
    session_start();
    if($_SESSION['status']!="login"){
      header("location:../index.php");
    }
    $id = $_GET['id'];
    $sql="SELECT * FROM book WHERE id=$id";
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
              <h3>Edit Book</h3>
              <?php 
                while($row = $data->fetch_assoc()){ 
              ?>
              <form action="../action/edit.php">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" name="id" class="form-control" placeholder="Title"
                        value="<?php echo $row['id'];?>" required style="display: none;">
                    </div>
                    <div class="form-group">
                      <input type="text" name="title" class="form-control" placeholder="Title"
                        value="<?php echo $row['title'];?>" required>
                    </div>
                    <div class="form-group">
                      <input type="number" name="price" class="form-control" placeholder="Price"
                        value="<?php echo $row['price'];?>" required>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="description" rows="3" placeholder="Description"
                        required><?php echo $row['description'];?></textarea>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Edit Book</button>
                    </div>

                  </div>
                </div>
              </form>
              <?php 
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "partial/footer.php";?>
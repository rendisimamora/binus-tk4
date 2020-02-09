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
              <div class="d-flex justify-content-between">
                <h3 class="mb-0">Daftar Book</h3>
                <a href="addbook.php">
                  <button class="btn btn-primary" type="button">Add Book</button>
                </a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th style="width: 20px;">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Pict</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1;
                    while($row = $data->fetch_assoc()){ 
                  ?>
                  <tr>
                    <td><?php echo $no;?></td>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="mb-0 text-sm">
                            <?php echo $row['title']; ?>
                          </span>
                        </div>
                      </div>
                    </th>
                    <td>
                      <img src="<?php echo $row['pict'];?>" style="width: 100px; height:100px; object-fit: cover;" />
                    </td>
                    <td>
                      <?php echo $row['price']; ?>
                    </td>
                    <td>
                      <a href="editbook.php?id=<?php echo $row['id']?>">
                        <button class="btn btn-success">Edit</button>
                      </a>
                      <a href="../action/delete.php?id=<?php echo $row['id'];?>">
                        <button class="btn btn-danger">Delete</button>
                      </a>
                    </td>
                  </tr>
                  <?php $no++;} ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "partial/footer.php";?>
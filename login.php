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
                <a class="nav-item-anchor primary--text font-weight-bold" href='index.php'>Home</a>
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

    <div class="form__login container">
      <h3>Login</h3>
      <form action="action/login.php">
        <input type="text" name="username" placeholder="Username" required />
        <input type="password" name="password" placeholder="Password" required />
        <input type="submit" name="submit" value="Login" />
      </form>
      <p class="body-2">Dont have account? <a href="register.php" class="text--decoration-none primary--text">Register
          here</a></p>
    </div>

  </div>
</body>
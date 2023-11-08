<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="stylelogin.css">
  <title>Login</title>
</head>

<body>
  <div class="row" id="login-container">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" id="login-box">
      <form action="proses_login.php" method="post">
        <h3 align="center">Login EcoSena Vintage</h3>
        <div class="form-groupem">
          <label for="email_user">Email:</label>
          <input type="text" name="email_user" id="email_user" class="form-control" required>
        </div>
        <div class="form-grouppw">
          <label for="password_user">Password:</label>
          <input type="password" name="password_user" id="password_user" class="form-control" required>
        </div>
        <div class="form-group">
          <center>
            <input type="submit" name="login" class="btn btn-success" value="LOGIN">
          </center>
        </div>
      </form>
      <a href="./user/tambah_user.php">Don't have an account? Signup</a>
    </div>
    <div class="col-md"></div>
  </div>
</body>

</html>
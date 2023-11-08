<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../stylereg.css">
    <title>Add User</title>
</head>

<body>
    <div class="container">
        <h3 class="title">Register</h3>
        <form action="proses_tambah_user.php" method="post">
            <div class="form-group">
                <label for="nama_user">Nama User:</label>
                <input type="text" id="nama_user" name="nama_user" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tlp_user">Nomor Handphone:</label>
                <input type="text" id="tlp_user" name="tlp_user" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="alamat_user">Alamat User:</label>
                <textarea id="alamat_user" name="alamat_user" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="email_user">Email:</label>
                <input type="text" id="email_user" name="email_user" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password_user">Password:</label>
                <input type="password" id="password_user" name="password_user" class="form-control" required>
            </div>
            <a href="../login.php">Have account ? Log In</a>
            <button type="submit" name="simpan" class="btn btn-primary">Tambah User</button>
        </form>
    </div>
</body>

</html>
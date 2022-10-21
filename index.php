<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="proses_register.php" method="post">

        <div class="container">
            <h2 align=center>Registration Form</h2>
            <p align="center">sudah punya akun? <b><a href="login.php">Login</a></b></p>
            <hr>
            <label for="nis"><b>NISN</b></label>
            <input type="text" placeholder="Enter NIS" name="nis" required>

            <label for="fullname"><b>Nama Lengkap</b></label>
            <input type="text" placeholder="Enter Nama Lengkap" name="fullname" required>

            <label for="sekolah"><b>Asal Sekolah</b></label>
            <input type="text" placeholder="Enter Asal Sekolah" name="sekolah" required>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <br>

            <button type="submit" name="register">Register</button>
        </div>

    </form>

</body>

</html>
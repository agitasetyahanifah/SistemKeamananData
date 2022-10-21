<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="proses_login.php" method="post">

        <div class="container">
            <h2 align=center>Login</h2>
            <p align="center">belum punya akun? <b><a href="index.php">Register</a></b></p>
            <hr>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit" name="login">Login</button>
        </div>

    </form>

</body>

</html>
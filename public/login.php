<?php


?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <link rel="web icon" href="../assets/icons/Logo.png">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="login-page">
        <div class="wrap1">
            <img class="study-img" src="../assets/images/laptopan.png" alt="human">
            <h1 class="title">EDUKASI</h1>
        </div>
        <div class="wrap2">
            <h1 class="judul">SIGN IN</h1>
            <div class="login-form">
                <form action="">
                    <div class="form">
                        <div class="eml">
                            <label for="email">Email:</label>
                            <input class="kolom" type="text" id="email" name="email" required>
                        </div>
                        <div class="pass">
                            <label for="password">Password:</label>
                            <input class="kolom" type="password" id="password" name="password" required>
                        </div>
                        <div class="remember-me">
                            <input class="kotak" type="checkbox" id="myCheckbox" name="myCheckbox">
                            <label class="cek" for="myCheckbox">Ingat saya</label>
                        </div>
                        <div class="login">
                            <input type="submit" value="Login" id="login-button">
                        </div>
                        <div class="register">
                            <p style="font-weight: 200;">Tidak punya akun? <a class="link" href="register.html">Register</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
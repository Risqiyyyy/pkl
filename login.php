<?php 
//hubungKAN FILE INI DENGAN kfile koneksi database

?>

    <head>
    <title> LOGIN </title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body>
        <br>
        <H1>Selamat datang di halaman login<h1>
        <div class="kotak_login">
            <p class="tulisan_login">silahkan Login</p>
        <center>
        <form action = "proseslogin.php" method ="POST" name="login">
        <label>Username</label>
            <input type = "text" name="username" class="form_login" placeholder="username...">
            <label>Password</label>
            <input type = "password" name="password" class="form_login" placeholder="password...">
            <br>
            <input type ="submit" class="tombol_login" name = "submit" value = "Login">
        </form>
        </center>

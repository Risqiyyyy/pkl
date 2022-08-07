<?php 
//hubungKAN FILE INI DENGAN kfile koneksi database

?>

    <head>
    <title> LOGIN </title>
    </head>
    <body>
        <center>
        <form action = "proseslogin.php" method ="POST" name="login">
        <label>Username</label>
            <input type = "text" name="username" placeholder="username...">
            <br>
            <label>Password</label>
            <input type = "password" name="password" placeholder="password...">
            <br>
            <input type ="submit" name = "submit" value = "Login">
        </form>
        </center>

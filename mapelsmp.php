<?php

session_start();
if (!isset($_SESSION['username'])){
    header("Location: login.php");
}

require 'user_sma.php';
require 'koneksi.php';
use UserSma\UserSma;

$obj = new UserSma();
?>
<h1>MATA PELAJARAN SMP Harapan Bangsa</h1>
<link rel="stylesheet" type="text/css" href="css/smp.css">
<br>
<form action = "input_guru.php" method ="POST" name="login">
<input type ="submit" class="tombol_input1" name = "submit" value = "Input Data Guru">
</form>
<center>
<table class= 'table table-bordered table-responsive'> 
 <tr>
 <tr>
    
 <table>
    <!-- start ipa -->
    <form action = "index.php" method ="POST" name="kembali">
    <input type ="submit" class="tombol_kembali" name = "kembali" value = "kembali">
    </form>

    <form action = "ipasmp.php" method ="POST" name="ipasmp">
    <input type ="submit" class="tombol1" name = "ipasmp" value = "ILMU PENGETAHUAN ALAM">
    </form>

    <form action = "mtksmp.php" method ="POST" name="mtksmp">
    <input type ="submit" class="tombol1" name = "mtksmp" value = "MATEMATIKA">
    </form>

    <form action = "ipssmp.php" method ="POST" name="ipssmp">
    <input type ="submit" class="tombol1" name = "ipssmp" value = "ILMU PENGETAHUAN SOSIAL">
    </form>
    </p>
    </form>
    </P>
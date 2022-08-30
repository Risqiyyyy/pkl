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
<h1>MATA PELAJARAN SMA Harapan Bangsa</h1>


<link rel="stylesheet" type="text/css" href="css/smp.css">
<br>
<form action = "input_guru_sma.php" method ="POST" name="login">
<input type ="submit" class="tombol_input1" name = "submit" value = "Input Data Guru">
</form>
<center>
<table class= 'table table-bordered table-responsive'> 
 <table>
    <!-- start ipa -->
    <form action = "index.php" method ="POST" name="kembali">
    <input type ="submit" class="tombol_kembali" name = "kembali" value = "kembali">
    </form>

    <form action = "ipasma.php" method ="POST" name="ipasma">
    <input type ="submit" class="tombol1" name = "ipasma" value = "ILMU PENGETAHUAN ALAM">
    </form>

    <form action = "mtksma.php" method ="POST" name="mtksma">
    <input type ="submit" class="tombol1" name = "mtksma" value = "MATEMATIKA">
    </form>

    <form action = "ipssma.php" method ="POST" name="ipssma">
    <input type ="submit" class="tombol1" name = "smaips" value = "ILMU PENGETAHUAN SOSIAL">
    </form>
    </p>
    </form>
    <link rel="stylesheet" type="text/css" href="css/smp.css">
<br>
  
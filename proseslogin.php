<?php
require 'user_smp.php';
require 'koneksi.php';

use User\User;

$ceklogin = new User();

$ceklogin->login($_POST['username'],$_POST['password']);
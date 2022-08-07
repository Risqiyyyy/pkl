<?php
require 'user.php';
require 'koneksi.php';

use User\User;

$ceklogin = new User();

$ceklogin->login($_POST['username'],$_POST['password']);
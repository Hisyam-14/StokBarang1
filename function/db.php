<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'db_stokBarang';

$link = mysqli_connect($host, $user, $pass, $db) or die (mysqli_error($link));
?>
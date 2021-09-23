<?php
    $server   = "localhost";
    $username = "root";
    $password = "";
    $db_con   = "toktek";

    $koneksi = mysqli_connect($server, $username, $password, $db_con) or die("Koneski ke Database gagal!");
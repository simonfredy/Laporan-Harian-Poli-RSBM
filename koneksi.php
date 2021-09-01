<?php
    $servername = "192.168.2.156";
    $username = "simrs_sik";
    $password = "Server#*2020";
    $database = "simrs_sik";

    $koneksi = new mysqli($servername, $username, $password, $database);

    if ($koneksi -> connect_error) {
        die("Connection Failed: ". $koneksi->connect_error);
    }
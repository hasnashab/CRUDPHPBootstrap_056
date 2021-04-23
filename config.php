<?php

$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");

//kalo error
if (mysqli_connect_error()) {
    echo "Koneksi database gagal : ". mysqli_connect_error();
}
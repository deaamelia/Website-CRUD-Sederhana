<?php

    $hostname=  "localhost";
    $userDataBase ="root";
    $passwordUser   = "";
    $databaseName ="uas_pbw";

    $koneksi= mysqli_connect($hostname,$userDataBase, $passwordUser, $databaseName) or die (mysqli_error());

    //if($koneksi){
        //echo "Berhasil koneksi"; 
    // } else echo "gagal koneksi";


?>
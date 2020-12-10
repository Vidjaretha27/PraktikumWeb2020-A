<?php
    //Konek ke Web Server Lokal
    $myHost	= "localhost";
    $myUser	= "root";
    $myPass	= "";
    $myDbs	= "db_pbwtugas12";

    $koneksidb = mysqli_connect( $myHost, $myUser, $myPass, $myDbs);
    if (! $koneksidb) 
    {
        echo "Failed Connection !";
    } 
    // else {
    //     echo "Connection success!";
    // }
?>

<?php

    include '../conn.php';
    
    $sp = $_POST['sp'];
    $colli = $_POST['colli'];
    $berat = $_POST['berat'];
    $franco = $_POST['franco'];
    $confrankert = $_POST['confrankert'];
    $penerimabarang = $_POST['penerimabarang'];
    $keterangan = $_POST['keterangan'];

    mysqli_query($conn,"INSERT INTO tb_data VALUES('','$sp','$colli','$berat','$franco','$confrankert','$penerimabarang','$keterangan')");
    header("location:../home.php");


?>
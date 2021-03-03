<?php

    include '../conn.php';
    $id = $_POST['id'];
    $sp = $_POST['sp'];
    $colli = $_POST['colli'];
    $berat = $_POST['berat'];
    $franco = $_POST['franco'];
    $confrankert = $_POST['confrankert'];
    $penerimabarang = $_POST['penerimabarang'];
    $keterangan = $_POST['keterangan'];

    mysqli_query($conn,"UPDATE tb_data SET sp='$sp', colli='$colli', berat='$berat', franco='$franco', confrankert='$confrankert', penerimabarang='$penerimabarang', keterangan='$keterangan' where id='$id' ");
    header("location:../home.php");

?>
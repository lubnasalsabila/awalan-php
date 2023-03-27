<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="p1.jpg" alt="p1.">
    <style>
    img{
        width: 230px;
        height: 400px;
        float: right;
        margin-top: 10px;
        margin-right: 100px;
        border-radius: 580px;
    }
    </style>
<?php
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal = $_POST['tanggal'];
    $umur = $_POST['umur'];
    $sekolah = $_POST['sekolah'];
    $rombel = $_POST['rombel'];
    echo "<br/><br/><br/><br/>";
    echo "<b>BIODATA ANDA</b>";
    echo "<br/><br/>";
    echo "Nama anda adalah: ". $nama;
    echo "<br/>";
    echo "Anda tinggal di: ". $alamat;
    echo "<br/>";
    echo "Anda lahir tanggal: ". $tanggal;
    echo "<br/>";
    echo "Usia anda: ". $umur;
    echo "<br/>";
    echo "Anda bersekolah di: ". $sekolah;
    echo "<br/>";
    echo "dan anda berada di kelas: ". $rombel;
    echo "<br/>";

    echo "<br/>";

    $gg = $_POST['gg'];
    $duk = $_POST['duk'];
    $gam = $_POST['gam'];
    $pas = $_POST['pas'];
    $hasil = $gg+$duk+$gam+$pas;
    $total = $hasil / 4;

    echo "<b>Nilai anda</b>";
    echo "<br/><br/>";
    echo "Nilai rata-rata anda adalah:  ". $total ;
    echo "<br/>";
    
    echo "<br/>";
    echo "Nilai maksimal anda adalah: ";
    echo max($gg, $duk, $gam, $pas);
    echo "<br/>";
    echo "Nilai minimal anda adalah: ";
    echo min($gg, $duk, $gam, $pas);
    echo "<br/>";

    echo "<br/> <br/>";
    

    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas php</title>
</head>
<body>
    <style>
        h3{
            text-align: center;
        }
        </style>
    <h3>BIODATA KU</h3>
    <form action="tampil.php" method="POST">
        <label>Nama: </label><br/>
        <input type="text" name="nama" ><br/>
        <label>Alamat: </label><br/>
        <input type="text" name="alamat" ><br/>
        <label>Tanggal lahir: <label><br/>
        <input type="date" name="tanggal"><br/>
        <label>Umur: </label><br/>
        <input type="number" name="umur" ><br/>
        <label>Sekolah: </label><br/>
        <input type="text" name="sekolah" ><br/>
        <label>Rombel: </label><br/>
        <input type="text" name="rombel" ><br/>
        <br/>
    </hr>
        <label>Nilai b.inggris: </label><br/>
        <input type="number" name="gg"><br/>
        <label>Nilai Produktif: </label><br/>
        <input type="number" name="duk"><br/>
        <label>Nilai Agama: </label><br/>
        <input type="number" name="gam"><br/>
        <label>Nilai Pipas: </label><br/>
        <input type="number" name="pas"><br/>

        <input type="submit" name="submit" value="submit"><br/>
</body>
</html>
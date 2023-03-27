<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas</title>
</head>
<body>
    <style>
        h3{
            text-align : center;
        }
        span{
            color : red;
        }
        
    </style>
    <h3>Belajar PHP-HTML</h3>
    <form action="" method="POST" >
        <label>Nama : </label><br/>
        <input type="text" name="nama" autocomplete="off" required><br/>
    </br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){
        $nama = $_POST ['nama'];
        echo "Selamat datang ke materi PHP <span>$nama</span> semoga lancar belajarnyaaa...";
        echo "</div>";
        }
    ?>
</body>
</html>
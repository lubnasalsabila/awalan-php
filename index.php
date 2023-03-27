<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP INPUT TEST</title>
</head>
<body>
    <style>
        body {
            text-align : center;
            background : #F9F9F9;
        }

        .fnama {
            border: 2px solid black;
            border-radius : 4px;
            background : #D6E4E5;
            transition: .5s ease;
        }

        .fnama:focus{
            background : white;
            border-color : black;
        }
        

    </style>

    <h2>Tugas HTML - PHP</h2>
    <form action="" method="POST">
        <label>Nama : </label>
        <input class="fnama" type="text" name="nama" autocomplete="off" required>
        <input class="btn" type="submit" name="submit" value="Daftar"><br>
    </form>


    <?php
        if(isset($_POST['submit'])){
            $nama = $_POST['nama'];

            echo "<div class='result'>";
            echo "<hr/>";
            echo "Selamat datang <strong>$nama</strong>, yang semangat belajarnya ya...";
            echo "</div>";
        }
    ?>

</body>
</html>
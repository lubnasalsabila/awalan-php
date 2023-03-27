<?php
    //tipe data string(teks)
    $nama = "lubna salsabila";
    //tipe data integer
    $umur = 15;
    //tipe data float
    $berat = 52.3;
    //tipe data boolean
    $menikah = false;

    
	//tipe data string menggunakan metode single quoted
  $string1 = 'Ini adalah contoh string sederhana';
  $string2 = 'Variabel juga tidak otomatis ditampilkan : $string1';
 
	echo $string1; echo "<br>"; //br berfungsi untuk membuat baris baru
	echo $string2; 

    echo "<br>";echo "<br>";
	
	//tipe data string menggunakan metode double quoted
  $stringa = "Ini adalah contoh string sederhana 2";
  $stringb = "Variabel akan otomatis ditampilkan : $stringa";
 
	echo $stringa; 
	echo "<br>"; //br berfungsi untuk membuat baris baru
	echo $stringb; 

    echo "<br>";echo "<br>";

    $nama = "Novica";
    $umur = 20;
  
    echo "Nama saya adalah ", $nama, " dan saya berumur ", $umur; echo "<br>";
    echo "Nama saya adalah ".$nama." dan saya berumur ".$umur; echo "<br>";

    echo "<br>";echo "<br>";

    $a = "1";
    $b = 2;
    echo $a + $b;
?>
    
    


    
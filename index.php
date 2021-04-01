<?php 
    //Memanggil class animal
    require('ape.php');
    
    $sheep = new Animal("shaun");

    echo 'Nama = ' . $sheep->nama; // shaun
    echo "<br>";
    echo 'Panjang = ' . $sheep->legs; // 4
    echo "<br>";
    echo 'Cold blooded = ' . $sheep->cold_blooded; // "no"
    
    echo "<br>";
    echo "<br>";

    $sungokong = new Ape("kera sakti");
    echo 'Nama = ' . $sungokong->nama; // shaun
    echo "<br>";
    echo 'Panjang = ' . $sungokong->legs; // 4
    echo "<br>";
    echo 'Cold blooded = ' . $sungokong->cold_blooded; // "no"  
    echo "<br>";
    $sungokong->yell(); // "Auooo"

    echo "<br>";
    echo "<br>";

    $kodok = new Frog("buduk");
    echo 'Nama = ' . $kodok->nama; // shaun
    echo "<br>";
    echo 'Panjang = ' . $kodok->legs; // 4
    echo "<br>";
    echo 'Cold blooded = ' . $kodok->cold_blooded; // "no"
    echo "<br>";
    $kodok->jump() ; // "hop hop"

?>
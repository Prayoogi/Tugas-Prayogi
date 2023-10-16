<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
echo "Pengulangan Untuk Mencari kategori bilangan :<br>";
for ($x = 1; $x <= 19; $x++) {
     echo "<br>";
    if ($x % 2 == 0) {
        echo "Angka $x adalah bilangan genap";
    } else {
        echo "Angka $x adalah bilangan ganjil";
    }

    if (isPrime($x)) {
        if ($x > 10) {
            echo " dan sekaligus bilangan prima";
        } else {
            echo " sekaligus bilangan prima";
        }
    }
}
?>
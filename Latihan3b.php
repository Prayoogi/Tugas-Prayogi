<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .outer-frame {
            border: 2px solid black;
            display: inline-block;
            padding: 10px;
         }
    </style>
</head>
<body>
<?php
$jawabanIsset ="Isset adalah = Untuk menentukan apakah suatu variabel dideklarasikan dan berbeda dari null.<br><br>";
$jawabanEmpty ="Empty adalah = Digunakan untuk menentukan apakah variabel ada dan nilai variabel tidak bernilai false.";

function soal($jawabanIsset,$jawabanEmpty){
    $style = "aturstyle";
    return "<span class='$style'>$jawabanIsset$jawabanEmpty</span>";
}

echo '<div class="outer-frame">' . soal($jawabanIsset, $jawabanEmpty) . '</div>';
?>
</body>
</html>
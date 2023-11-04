<?php

$negara_asean = [
   ["Negara" => "Indonesia","Ibu Kota" => "D.K.I Jakarta","Kode Telepon" => "+62","Makanan Khas" => "Nasi Goreng","Harga" => 15000,],
   ["Negara" => "Singapura","Ibu Kota" => "Singapura","Kode Telepon" => "+65","Makanan Khas" => "Hainanese Chicken Rice","Harga" => 100,],
   ["Negara" => "Malaysia","Ibu Kota" => "Kuala Lumpur","Kode Telepon" => "+60","Makanan Khas" => "Nasi Lemak","Harga" => 10,],
   ["Negara" => "Brunei","Ibu Kota" => "Bandar Seri Begawan","Kode Telepon" => "+673","Makanan Khas" => "Ambuyat","Harga" => 15,],
   ["Negara" => "Thailand","Ibu Kota" => "Bangkok","Kode Telepon" => "+66","Makanan Khas" => "Pad Thai","Harga" => 40,],
   ["Negara" => "Laos","Ibu Kota" => "Vientiane","Kode Telepon" => "+856","Makanan Khas" => "Larb","Harga" => 25,],
   ["Negara" => "Filipina","Ibu Kota" => "Manila","Kode Telepon" => "+63","Makanan Khas" => "Adobo","Harga" => 60,],
   ["Negara" => "Myanmar","Ibu Kota" => "Naypyidaw","Kode Telepon" => "+95","Makanan Khas" => "Mohinga","Harga" => 5,],
];

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prayogi-latihan 4d</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Negara</th>
            <th>Ibu Kota</th>
            <th>Kode Telepon</th>
            <th>Makanan Khas</th>
            <th>Harga</th>
        </tr>
        <?php foreach ($negara_asean as $negara): ?>
            <tr>
                <td><?php echo $negara["Negara"]; ?></td>
                <td><?php echo $negara["Ibu Kota"]; ?></td>
                <td><?php echo $negara["Kode Telepon"]; ?></td>
                <td><?php echo $negara["Makanan Khas"]; ?></td>
                <td><?php echo $negara["Harga"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
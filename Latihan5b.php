<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Display</title>
</head>
<body>

<?php
$dataArray = [
    [
        'nama' => 'Prayogi',
        'umur' => 20,
        'alamat' => 'JL. Banjar Rejo, Kota Jambi',
        'pekerjaan' => 'Mahasiswa',
        'gambar' => 'c:\Users\ASUS\Downloads\WhatsApp Image 2023-11-28 at 20.57.35.jpeg',
    ],
    [
      'nama' => 'Prayogi',
      'umur' => 20,
      'alamat' => 'JL. Banjar Rejo, Kota Jambi',
      'pekerjaan' => 'Mahasiswa',
      'gambar' => 'WhatsApp Image 2023-11-28 at 20.57.35.jpeg',
  ],

];


echo '<table border="1">';
echo '<tr><th>Nama</th><th>Umur</th><th>Alamat</th><th>Pekerjaan</th><th>Gambar</th></tr>';
foreach ($dataArray as $data) {
    echo '<tr>';
    echo '<td><a href="latihan5c.php?' . http_build_query($data) . '">' . $data['nama'] . '</a></td>';
    echo '<td>' . $data['umur'] . '</td>';
    echo '<td>' . $data['alamat'] . '</td>';
    echo '<td>' . $data['pekerjaan'] . '</td>';
    echo '<td><img src="' . $data['gambar'] . '" alt="Gambar"></td>';
    echo '</tr>';
}
echo '</table>';
?>

</body>
</html>
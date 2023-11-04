<!DOCTYPE html>
<html>
<head>
    <title>Daftar Negara ASEAN</title>
</head>
<body>
    <?php
    $negara_asean = array("Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand");

    echo "<b>Daftar Negara ASEAN awal :</b>";
    echo "<ul>";
    foreach ($negara_asean as $negara) {
        echo "<li>$negara</li>";
    }
    echo "</ul>";

    $negara_asean[] = "Laos";
    $negara_asean[] = "Filipina";
    $negara_asean[] = "Myanmar";

    echo "<br/><b>Daftar Negara ASEAN baru :</b>";
    echo "<ul>";
    foreach ($negara_asean as $negara) {
        echo "<li>$negara</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
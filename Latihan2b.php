<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1c</title>
    <style>
        .boxed-letter {
            width: 50px;
            height: 50px;
            background-color: #ffee93;
            display: inline-block;
            text-align: center;
            line-height: 50px;
            font-size: 24px;
            margin: 2px;
        }
        .outbox {
            border: 2px solid black;
            display: inline-block;
            padding: 10px;
        }
    </style>
</head>
<body>
<div class="outbox">
    <?php
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='boxed-letter'>" . $j . "</div>";
        }
        echo "<br>";
    }
    ?>
</div>
</body>
</html>

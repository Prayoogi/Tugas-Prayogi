<!DOCTYPE html>
<html>
<head>
    <style>
        .box {
            width: 50px;
            height: 50px;
            background-color: gray;
            display: inline-block;
            text-align: center;
            line-height: 50px;
            font-size: 24px;
            margin: 2px;
        }
        .outer-frame {
            border: 2px solid black;
            display: inline-block;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="outer-frame">
        <?php
        $letters = ['A', 'B', 'C'];
        echo '<div class="box">' . $letters[0] . '</div><br>';
        echo '<div class="box">' . $letters[0] . '</div>';
        echo '<div class="box">' . $letters[1] . '</div><br>';
        echo '<div class="box">' . $letters[0] . '</div>';
        echo '<div class="box">' . $letters[1] . '</div>';
        echo '<div class="box">' . $letters[2] . '</div>';
        ?>
    </div>
</body>
</html>
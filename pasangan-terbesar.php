<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function cari_pasangan($int) {
            $arr = array_map('intval', str_split($int));
            $max1 = max($arr);
            
            $nextMax = next($arr);
            echo $max1, $nextMax;
        }

        pasangan_terbesar(641573); // 73
        pasangan_terbesar(12783456); // 83
        pasangan_terbesar(910233); // 91
        pasangan_terbesar(71856421); // 85
        pasangan_terbesar(79918293); // 99
    ?>
</body>
</html>
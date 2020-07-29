<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function cari_mean($arr) {
        
        $mean = ceil(array_sum($arr) / count($arr));
        echo $mean ;
        echo "<br/>";
    }
    echo "Mean dari [1, 2, 3, 4, 5] : ";
    cari_mean([1, 2, 3, 4, 5]); // 3
    echo "Mean dari [3, 5, 7, 5, 3] : ";
    cari_mean([3, 5, 7, 5, 3]); // 5
    echo "Mean dari [6, 5, 4, 7, 3] : ";
    cari_mean([6, 5, 4, 7, 3]); // 5
    echo "Mean dari [1, 3, 3] : ";
    cari_mean([1, 3, 3]); // 2
    echo "Mean dari [7, 7, 7, 7, 7] : ";
    cari_mean([7, 7, 7, 7, 7]); // 7

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        function papan_catur($angka) {
            for($row=1; $row<=$angka; $row++) {
                echo "<br/>";
                for($col=1; $col<=($angka*2); $col++) {
                    $total=$row+$col;
                    if($total % 2 == 0) {
                        echo "# ";
                    }else {
                        echo "&nbsp";
                    }
                }
                
            }
            echo "<hr/>";
        }
        echo "papan catur: 6";
        papan_catur(6);
        echo "papan catur: 9";
        papan_catur(9);
        echo "papan catur: 15";
        papan_catur(15);
    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function tentukan_deret_aritmatika($arr) {
            $check = '';
            for($i=0; $i <count($arr); $i++) {
                $number = current($arr);
                $nextNumber = next($arr);
                if($nextNumber - $number == 1) {
                    $check .= "true"; 
                } else if($nextNumber - $number == 2) {
                    $check .= "true";  
                } else {
                    $check .= "false";
                }
            }
            
            if(strrpos($check, 'false') == true) {
                echo "false";
            } else {
                echo "true";
            }
            echo "<br/>";
        }

        tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
        tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
        tentukan_deret_aritmatika([2, 4, 6, 8]); //true
        tentukan_deret_aritmatika([2, 6, 18, 54]);// false
        tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
            ?>
        </body>
</html>
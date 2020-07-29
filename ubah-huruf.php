<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function ubah_huruf($str) {
            $splits = str_split($str);
            $word = '';
            foreach ($splits as $split) {
                $word .= chr(ord($split)+1);
            }
            echo $word . "<br/>";
        }
        
        $cases = ['wow', 'developer', 'laravel', 'keren', 'semangat'];
        foreach ($cases as $case) {
            echo "Kata ".$case.": ";
            ubah_huruf($case);
        }
        
    ?>
</body>
</html>
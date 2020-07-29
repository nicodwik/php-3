<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function tukar_besar_kecil($str) {
            $alphabets = str_split($str);
            $word = '';
            foreach ($alphabets as $alphabet) {
                if(ctype_lower($alphabet)) {
                    $word .= strtoupper($alphabet);
                }else {
                    $word .= strtolower($alphabet);
                }
                
            }
            echo $word. "<br/>";
        }

        $cases = ['Hello World', 'I aM aLAY', 'My Name is Bond!!', 'IT sHOULD bE me', '001-A-3-5TrdYW'];
        foreach ($cases as $case) {
            tukar_besar_kecil($case);
        }
            ?>
</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sum Two numbers</title>
    </head>
    <body>
        <?php
        $firstNumber = 2;
        $secondNumber =5;
        $sum = round((float)$firstNumber+(float)$secondNumber,2);
        
        echo '$firstnumber + $secondnumber = '.$firstNumber.' + '.$secondNumber.' = '.$sum.'<br>';
        
                $firstNumber = 1.567808;
        $secondNumber =0.356;
        $sum = round($firstNumber+$secondNumber,2);
        
        echo '$firstnumber + $secondnumber = '.$firstNumber.' + '.$secondNumber.' = '.$sum.'<br>';
        
                $firstNumber = 1234.5678;
        $secondNumber =333;
        $sum = round($firstNumber+$secondNumber,2);
        
        echo '$firstnumber + $secondnumber = '.$firstNumber.' + '.$secondNumber.' = '.$sum.'<br>';
        ?>
    </body>
</html>

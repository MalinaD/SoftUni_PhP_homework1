<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Problem 8 Time until new year</title>
    </head>
    <body>
        <?php
       $allDaysAtYear = 365;
       
       if(date('l')==1){
           $allDaysAtYear = 366;
       }
       
       $leftDays = $allDaysAtYear - date('z');
       $leftHours = ($allDaysAtYear*60)-(date("G")+1);
       $leftMinutes = ($leftHours*60)-date("i");
       $leftSeconds = ($leftMinutes*60)-date("s");
       
       echo "Hours until New Year: ".$leftHours.'<br>';
       echo "Minutes until New Year: ".$leftMinutes.'<br>';
       echo "Seconds until New Year: ".$leftSeconds.'<br>';
       
       echo "Days:Hours:Minutes:Seconds $leftDays"
       .":".$leftHours%24
       .":".$leftMinutes%60
       .":".$leftSeconds%60;
        ?>
    </body>
</html>

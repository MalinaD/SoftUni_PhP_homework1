<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Problem 4 Non Repeating digit</title>
    </head>
    <body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
          Variable:<input type="text" name="num"></input></br>
          </br>  
        <input type="submit" name="subm" value="Show me"></input></br>
      </form>
        
        <?php
        $N = $_POST['num'];
        $arr=array();
        
        for($i=102;$i<=N;$i++){
            if(strlen($i)>=4){
                break;
            }
            
            $firstDigit = (int)($i%10);
            $secondDigit = (int)(($i/10)%10);
            $thirdDigit = (int)($i/100);
            
            if($firstDigit != $secondDigit && $firstDigit != $thirdDigit){
                if($secondDigit != $thirdDigit){
                array_push($arr, $i);
                }
            }
        }
        
        if(count($arr)>0){
            echo implode(', ', $arr);
        }
        else{
            echo "no";
        }

        ?>
    </body>
</html>

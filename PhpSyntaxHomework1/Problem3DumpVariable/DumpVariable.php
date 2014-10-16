<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Problem 3 Dump Variable</title>
    </head>
    <body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
          Variable:<input type="text" name="num"></input></br>
          </br>  
        <input type="submit" name="subm" value="Show me"></input></br>
      </form>
        
        <?php
        $var = $_POST['num'];
          if(is_numeric($var)){
              echo var_dump($var);
          }
          else {
              echo gettype($var);
          }
        ?>
    </body>
</html>

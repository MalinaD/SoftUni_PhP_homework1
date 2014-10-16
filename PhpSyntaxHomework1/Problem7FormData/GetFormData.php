<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Problem 7 Form Data</title>
    </head>
    <body>
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
          <input type="text" name="name" placeholder="Name.."></input></br>
          <input type="text" name="age" placeholder="Age.."></input></br>
          </br>
          <input type="radio" name="gender" value="male">Male</input></br>
          <input type="radio" name="gender" value="female">Female</input></br></br>
        <input type="submit" name="subm" value="Send"></input></br>
      </form>
        
        <?php
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender= $_POST['gender'];
           
        if($_SERVER['REQUEST_METHOD']==='POST'){
        echo '</br>My name is '.$name.'. I am '.$age.' years old. I am '.$gender.' .';
        }
        ?>
    </body>
</html>

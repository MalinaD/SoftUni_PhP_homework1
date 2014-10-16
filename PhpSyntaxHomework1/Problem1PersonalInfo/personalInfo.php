<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Problem 1 Personal Info</title>
    </head>
    <body>
        <?php
        class Person{
        public $firstname;
        public $lastname;
        public $age;

        
        function __construct($firstname,$lastname,$age) {
            $this->firstname=$firstname;
            $this->lastname=$lastname;
            $this->age=$age;
        }

        }
        
        $person1= new Person('Mister','DarkMan',21);
        $person2= new Person('Pesho','Peshev',55);
        
        print "My name is ".$person1->firstname." ".$person1->lastname." and I am ".$person1->age." years old. <br>";
        print "My name is ".$person2->firstname." ".$person2->lastname." and I am ".$person2->age." years old.";
        ?>
    </body>
</html>

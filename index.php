<?php include 'include/classes.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // include './Classes/Person.php';

    //4: Visibility and Inheritance
    $pet01=new Pet();
    echo $pet01->get_owner();
    echo '<br>';
    
    // 5: Constructor and Destructors
    $employee01=new Employee("Juan","Valdez","valdez@gmail.com","25");
    echo $employee01->get_info();
    echo '<br>';
    echo $employee01->get_email();
    echo '<br>';
    $employee01->set_email("employee01@example.es");
    echo $employee01->get_email();
    
    //Delete objects
    unset($employee01);
    //echo $employee01->get_email();
    /* 
    trying to access a attribute of deleted object
    
    OUTPUT:
    Warning: Undefined variable $employee01 in /var/www/OOP-Project/index.php on line 29
    
    Fatal error: Uncaught Error: Call to a member function get_email() on null 
    in /var/www/OOP-Project/index.php:29 Stack trace: #0 {main} thrown 
    in /var/www/OOP-Project/index.php on line 29
    */
    echo '<br>';
    // echo Employee::$ageOfLegalMajority; it's a private attribute
    echo Employee::$drinkingAge;
    echo '<br>';
    echo Employee::getAgeOfLegalMajority();
    echo '<br>';
    Employee::setAgeOfLegalMajority(18);
    echo Employee::getAgeOfLegalMajority();
    
    ?>
</body>
</html>

<?php
//? Fonction qui permet d'activer le chargement automatique des classes
spl_autoload_register(
    function ($class) {
        require_once 'classes/'.$class.'.class.php';
    }
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correction exercice POO</title>
</head>

<body>
    <h1>Exercices Simples</h1>
    <h2>Exercice 1</h2>
    <?php
    // require 'classes/User.class.php';
    $user = new User('a', 'b', 'c', 'd', 'e');
    $user->setFirstName('Axel');
    echo '<br>';
    echo $user->getLastName();
    echo '<br>';
    echo '<h2>Exercice 2</h2>';
    echo $user->getFullName();
    echo '<br>';
    echo '<h2>Exercice 3</h2>';
    $user->identify();
    echo '<br>';
    echo '<h2>Exercice 4</h2>';
    // require 'classes/Admin.class.php';
    $admin = new Admin('admin', 'bdmin', 'cdmin', 'dmin', 'edmin', 'AdminNickname');
    echo '<br>';
    echo '<h2>Exercice 5</h2>';
    $admin->identify();
    ?>
    <h1>Exercices Maths</h1>
    <h2>Exercice 1</h2>
    <?php
    $calculator = new Calculator(10, 2);
    echo '<br>';
    echo $calculator->add();
    echo '<br>';
    echo $calculator->multiply();
    echo '<br>';
    echo $calculator->substract();
    echo '<br>';
    echo $calculator->divide();
    echo '<br>';
    echo $calculator->euclidDivide();
    echo '<br>';
    $tenzero = new Calculator(10, 0);
    echo '<br>';
    echo $tenzero->add();
    echo '<br>';
    echo $tenzero->multiply();
    echo '<br>';
    echo $tenzero->substract();
    echo '<br>';
    echo $tenzero->divide();
    echo '<br>';
    echo $tenzero->euclidDivide();
    echo '<br>';
    $negatif = new Calculator(10, -1);
    echo '<br>';
    echo $negatif->add();
    echo '<br>';
    echo $negatif->multiply();
    echo '<br>';
    echo $negatif->substract();
    echo '<br>';
    echo $negatif->divide();
    echo '<br>';
    echo $negatif->euclidDivide();
    echo '<br>';
    echo '<h2>Exercice 2</h2>';
    $sort = new Sorter([1, 5, 4, 84, 53, 68, 4, 546, 4, 8, 15, 8, 513, 864]);
    echo 'Array au départ';
    echo '<br>';
    print_r($sort);
    echo 'Array après rangement';
    echo '<br>';
    print_r($sort->sortArray());
    echo '<br>';
    $alphabetic = new Sorter(['hey', 'a1', 'a10', 'a2', 'a30', 'z', 'zelda', 'mario', 'quigon-jinn', 'chewbacca']);
    echo 'Array au départ';
    echo '<br>';
    print_r($alphabetic);
    echo 'Array après rangement';
    echo '<br>';
    print_r($alphabetic->sortArray());
    ?>
</body>

</html>
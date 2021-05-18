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
    require 'classes/User.class.php';
    $user = new User("a", "b", "c", "d", "e");
    $user->setFirstName("Axel");
    echo '<br>';
    echo $user->getLastName();
    echo '<br>';
    echo "<h2>Exercice 2</h2>";
    echo $user->getFullName();
    echo '<br>';
    echo "<h2>Exercice 3</h2>";
    $user->identify();
    echo '<br>';
    echo "<h2>Exercice 4</h2>";
    require 'classes/Admin.class.php';
    $admin = new Admin("admin", "bdmin", "cdmin", "dmin", "edmin", "AdminNickname");
    echo '<br>';
    echo "<h2>Exercice 5</h2>";
    $admin->identify();



    ?>
</body>

</html>
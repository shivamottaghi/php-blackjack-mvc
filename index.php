<?php
declare(strict_types=1);

include_once("Controller/Controller.php");

$controller = new Controller();
$controller->invoke();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A BlackJack Game as part of the BeCode course towards mastering Object Oriented Programming using PHP">
    <title>Blackjack with php and MVC</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="border-bottom ">
        <h1 class="text-center">BlackJack + MVC</h1>
    </header>
    <div class="playerAction text-center">
        <form method="get">
            <input type="submit" name="submit" value="New Game" class="btn border-primary"></input>
        </form>
    </div>
</div>
</body>

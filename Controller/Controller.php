<?php

include_once("Model/Game.php");

class Controller {
    public $game;

    public function __construct()
    {
        $this->game = new Game();
    }

    public function invoke()
    {
        var_dump($_GET);
        if (!isset($_GET['newGame']))
        {
            // no special book is requested, we'll show a list of all available books
            //$gameDeck= $this->game->showDeck();
            $gameDeck= $this->game->showPlayerCards();

            include 'view/deck.php';}
        else
        {
            // show the requested book
            $book = $this->model->getBook($_GET['book']);
            include 'view/viewbook.php';
        }
    }
}
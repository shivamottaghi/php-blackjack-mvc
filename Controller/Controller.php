<?php

include("Model/Blackjack.php");

class Controller {

    protected $blackjack;
    protected string $page = 'homepage';

    public function __construct()
    {
        $this->blackjack = new Blackjack();
    }

    public function invoke()
    {
        if (isset($_GET['page'])){
            $this->page = $_GET['page'];
        }
        switch ($this->page){
            case 'newGame':
                $playerCardsUni= $this->blackjack->showPlayerCards();
                $dealerCardsUni = $this->blackjack->showDealerCards();
                $dealerScore = $this->blackjack->showDealerScore();
                $playerScore = $this->blackjack->showPlayerScore();
                include 'View/newGameView.php';
                break;
            case 'hit':
                break;
            case 'stand':
                break;
            case 'surrender':
                break;
            case 'restart':
                break;
            case 'homepage':
                include 'View/homePageView.php';
                break;
            default:
                include 'View/homePageView.php';
                break;
        }


    }
}
<?php
declare(strict_types=1);

include_once("Model/Blackjack.php");
class Game
{
    protected $blackJack;

    public function __construct()
    {
        $this->blackJack = new Blackjack();
    }

    public function showDeck(){
        return $this->blackJack->getDeck();
    }

    public function showPlayerCards(){
        $playerCards = $this->blackJack->getPlayer()->getCards();
        $playerCardsUni = [];
        foreach ($playerCards as $card){
            array_push($playerCardsUni,$card->getUnicodeCharacter(true));
        }
        return $playerCardsUni;
    }
}
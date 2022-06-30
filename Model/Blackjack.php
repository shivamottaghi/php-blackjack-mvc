<?php
include_once('Model/Dealer.php');
include_once ('Model/Player.php');
include_once ('Model/Deck.php');
class Blackjack
{
    private Player $player;
    private Dealer $dealer;
    private Deck $deck;

    /**
     *
     */
    public function __construct()
    {
        $this->deck = new Deck();
        $this->deck->shuffle();
        $this->player = new Player($this->deck);
        $this->dealer = new Dealer($this->deck);
    }


    /**
     * @return Player
     */
    public function getPlayer(): Player
    {
        return $this->player;
    }

    /**
     * @return Player
     */
    public function getDealer(): Dealer
    {
        return $this->dealer;
    }

    /**
     * @return Deck
     */
    public function getDeck(): Deck
    {
        return $this->deck;
    }

    public function showPlayerCards(){
        $playerCards = $this->player->getCards();
        $playerCardsUni = [];
        foreach ($playerCards as $card){
            array_push($playerCardsUni,$card->getUnicodeCharacter(true));
        }
        return $playerCardsUni;
    }
    public function showDealerCards(){
        $dealerCards = $this->dealer->getCards();
        $dealerCardsUni = [];
        foreach ($dealerCards as $card){
            array_push($dealerCardsUni,$card->getUnicodeCharacter(true));
        }
        return $dealerCardsUni;
    }
    public function showPlayerScore(){
        return $this->player->getScore();
    }
    public function showDealerScore(){
        return $this->dealer->getScore();
    }
}
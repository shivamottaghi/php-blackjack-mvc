<div class="row align-items-center">
    <div class="col-11 col-md-5 text-canter">
        <section style="font-size: 12rem" class="text-center">
        <?php foreach ($dealerCardsUni as $card){
            echo $card;
        } ?>
        </section>
    </div>
    <div class="col-1 col-md-1 text-center">
        <p>
            <h5>Dealer Score:</h5>
            <?php echo $dealerScore; ?>
        </p>
    </div>
    <div class="col-1 col-md-1 text-center">
        <p>
        <h5>Dealer Score:</h5>
        <?php echo $playerScore; ?>
        </p>
    </div>
    <div class="col-12 col-md-5 text-canter">
        <section style="font-size: 12rem"  class="text-center">
            <?php foreach ($playerCardsUni as $card){
                echo $card;
            } ?>
        </section>
    </div>
</div>
<div class="row align-items-center">
    <div class="col-12 text-center">
        <button class="btn btn-lg btn-success" name="page" value="hit">Hit!</button>
        <button class="btn btn-lg btn-warning" name="page" value="stand">Stand</button>
        <button class="btn btn-lg btn-danger" name="page" value="surrender">Surrender</button>
    </div>
</div>



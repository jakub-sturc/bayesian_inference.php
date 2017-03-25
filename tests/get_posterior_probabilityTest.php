<?php
declare(strict_types=1);

include '../bayesian_inference.php';

use PHPUnit\Framework\TestCase;

final class bayesian_inference_Test extends TestCase
{
    /*
        We have a deck of cards. We know top card is 'face' card. What's probablity it's king?
    */
    public function testKingGivenFace(): void
    {
        $peh = 1;       // P(Face|King)
        $ph = 4/52;     // P(King)
        $pe = 3/13;     // P(Face)

        // P(King|Face)
        $phe = get_posterior_probability($peh, $ph, $pe);

        $this->assertEquals(1/3, $phe);
    }

    /*
        Chest A has 100 gold coins and nothing else in it. Chest B has 50 gold coins and 50 silver conins and nothing else in it. We randomly choose a treasure chest to open, and then randomly choose a coin from that treasure chest. If the coin you choose is gold, then what is the probability that you chose chest A?
    */
    public function testGoldCoinIsFromChestA(): void
    {
        $peh = 1;       // P(Gold|Chest A)
        $ph = 1/2;      // P(Chest A)
        $pe = 150/200;  // P(Gold)

        // P(King|Face)
        $phe = get_posterior_probability($peh, $ph, $pe);

        $this->assertEquals(2/3, $phe);
    }
}
?>
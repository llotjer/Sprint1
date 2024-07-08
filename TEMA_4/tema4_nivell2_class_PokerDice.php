<?php

/*
Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.

Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.

Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.

Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.

A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus.
*/

class PokerDice{

    const DICE_SIDE = ['As', 'K', 'Q', 'J', '7', '8'];
    private $totalThrows = [];

    public function setTotalThrows($throw): void{
        array_push($this->totalThrows, $throw);
    }
   
    public function throw():int{
        return array_rand(self::DICE_SIDE);
    }

    public function shapeName(int $throw):string{
        return self::DICE_SIDE[$throw];
    }

    public function getTotalThrows():array{
        return $this->totalThrows;
    }

}
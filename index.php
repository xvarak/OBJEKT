<?php

class Scitacka
{

    public function secti($a, $b)
    {
        return $a + $b;
    }

}

$scitacka = new Scitacka();
$c = $scitacka->secti(83, -2);
echo($c);

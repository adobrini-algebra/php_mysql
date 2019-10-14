<?php

class Datum{

    public $dan = 'Ponedjeljak';
}

// Instanciranje objekta
$datum = new Datum();
echo $datum->dan;
echo '<br>';

$datum->dan = 'Utorak';
echo $datum->dan;
echo '<br>';
echo '<br>';


$datum2 = new Datum();
echo $datum2->dan;
?>
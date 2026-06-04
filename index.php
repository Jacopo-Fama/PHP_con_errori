<?php

require_once 'functions.php';

echo "<h1>Test PHP</h1>";

$result = calculateTotal(10, 20);

echo "Totale: " . $result;

echo $errore;

if ($result > 0) {
    echo "Risultato valido";
}

?>

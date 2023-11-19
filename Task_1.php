<?php
function printEvenNumbersFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . ' ';
    }
    echo PHP_EOL;
}

function printEvenNumbersWhile($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        echo $i . ' ';
        $i += $step;
    }
    echo PHP_EOL;
}


function printEvenNumbersDoWhile($start, $end, $step) {
    $i = $start;
    do {
        echo $i . ' ';
        $i += $step;
    } while ($i <= $end);
    echo PHP_EOL;
}


echo "Using for loop: ";
printEvenNumbersFor(2, 20, 2);

echo "Using while loop: ";
printEvenNumbersWhile(2, 20, 2);

echo "Using do-while loop: ";
printEvenNumbersDoWhile(2, 20, 2);
?>

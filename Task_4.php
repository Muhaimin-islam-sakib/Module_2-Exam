<?php
// Function to generate and print Fibonacci numbers
function printFibonacci($count) {
    $fibonacci = array(0, 1);

    for ($i = 2; $i < $count; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    echo "The first $count Fibonacci numbers: ";
    foreach ($fibonacci as $number) {
        echo $number . ' ';
    }
    echo PHP_EOL;
}

printFibonacci(15);

?>

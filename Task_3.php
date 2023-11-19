<?php
// Function to generate the Fibonacci numbers
function generateFibonacci($count) {
    $fibonacci = array(0, 1);

    for ($i = 2; $i < $count; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];

        if ($fibonacci[$i] > 100) {
            break;
        }
    }

    return $fibonacci;
}

$fibonacciNumbers = generateFibonacci(10);

echo "The first 10 Fibonacci numbers: ";
foreach ($fibonacciNumbers as $number) {
    echo $number . ' ';
}
?>

<?php
// Loop to print numbers from 1 to 50
for ($i = 1; $i <= 50; $i++) {
    // Skip multiples of 5
    if ($i % 5 == 0) {
        continue;
    }

    echo $i . ' ';
}

?>


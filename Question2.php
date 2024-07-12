<?php

function divide($numerator, $denominator) {
    if ($denominator == 0) {
        throw new Exception("Division by zero error.");
    }
    return $numerator / $denominator;
}

function performDivision($num, $den) {
    try {
        $result = divide($num, $den);
        echo "Result of division: $result";
    } catch (Exception $e) {
        echo "Caught exception: " . $e->getMessage();
    } 
}

// Test cases
performDivision(10, 2);
echo "<br>";
performDivision(10, 0); 
?>
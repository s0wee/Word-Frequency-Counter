<?php
//Example
$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

$totalPrice = calculateTotalPrice($items);
echo "Total price: $" . $totalPrice;

function calculateTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

$string = "This is a poorly written program with little
structure and readability.";

$modifiedString = removeSpacesAndConvertToLowercase($string);
echo "\nModified string: " . $modifiedString;

function removeSpacesAndConvertToLowercase(string $string): string {
    $string = str_replace(' ', '', $string);
    return strtolower($string);
}

$number = 42;
$numberType = checkEvenOrOdd($number);
echo "\nThe number " . $number . " is " . $numberType . ".";

function checkEvenOrOdd(int $number): string {
    if ($number % 2 == 0) {
        return "even";
    } else {
        return "odd";
    }
}
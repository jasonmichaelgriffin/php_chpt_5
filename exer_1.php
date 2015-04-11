<?php
// automatic types definitions, though does the array truly count?
$string_example = "ThisIsAString";
$integer_example = 66;
$float_example = 123.456;
$array_example = array('circle', 'triangle', 'square');
$boolean_example = false;
$integer_comparison_example_1 = 10;
$integer_comparison_example_2 = 20;
// testing definitions
echo "Is variable /$string_example a string? " . is_string($string_example) . "<br>";
echo "Is variable integer_example an integer? " . is_integer($integer_example) . "<br>";
echo "Is variable float_example a float/double? " . is_float($float_example) . "<br>";
echo "Is variable array_example an array? " . is_array($array_example) . "<br>";
echo "Is variable boolean_example a boolean? " . is_bool($boolean_example) . "<br>";
// comparison tests
echo "Is variable integer_comparison_example_1 equal to integer_comparison_example_2? " . ($integer_comparison_example_1 == $integer_comparison_example_2) . "<br>";
echo "Is variable integer_comparison_example_1 less than integer_comparison_example_2? " . ($integer_comparison_example_1 < $integer_comparison_example_2) . "<br>";
echo "Is variable integer_comparison_example_1 greater than integer_comparison_example_2? " . ($integer_comparison_example_1 > $integer_comparison_example_2) . "<br>";
echo "Is variable integer_comparison_example_1 less than or equal to integer_comparison_example_2? " . ($integer_comparison_example_1 <= $integer_comparison_example_2);
?>
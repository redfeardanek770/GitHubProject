 <?php
// This is a comment

// Define a function to generate a random number between 1 and 6
function getRandomNumber() {
    return mt_rand(1, 6);
}

// Define a function to generate a random array of numbers with length equal to the input parameter
function getRandomArray($length) {
    $arr = [];
    for ($i = 0; $i < $length; $i++) {
        $arr[] = mt_rand(1, 6);
    }
    return $arr;
}

// Define a function to check if an array contains all unique elements
function isUniqueArray($arr) {
    $values = array_count_values($arr);
    foreach ($values as $value => $count) {
        if ($count > 1) {
            return false;
        }
    }
    return true;
}

// Define a function to get the largest element in an array
function getLargestElement($arr) {
    return max($arr);
}

// Define a function to get the smallest element in an array
function getSmallestElement($arr) {
    return min($arr);
}

// Define a function to get the sum of all elements in an array
function getSumOfElements($arr) {
    return array_sum($arr);
}

// Define a function to get the average of all elements in an array
function getAverageOfElements($arr) {
    return array_sum($arr) / count($arr);
}

// Call the functions and print their output
echo "Random number: " . getRandomNumber() . "\n";
echo "Random array with length 5: " . implode(", ", getRandomArray(5)) . "\n";
echo "Is the array ['a', 'b', 'c'] unique? " . (isUniqueArray(['a', 'b', 'c']) ? "Yes" : "No") . "\n";
echo "Largest element in ['a', 'b', 'c']: " . getLargestElement(['a', 'b', 'c']) . "\n";
echo "Smallest element in ['a', 'b', 'c']: " . getSmallestElement(['a', 'b', 'c']) . "\n";
echo "Sum of elements in ['a', 'b', 'c']: " . getSumOfElements(['a', 'b', 'c']) . "\n";
echo "Average of elements in ['a', 'b', 'c']: " . getAverageOfElements(['a', 'b', 'c']);
?>
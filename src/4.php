 <?php
 
// Define a function to get a random number between two values
function get_random_number($min, $max) {
    return rand($min, $max);
}

// Use the function to get a random number between 1 and 10
$random_number = get_random_number(1, 10);

echo $random_number;
?>
<?php
// Initializing the five string variables
$strings = ["Alligator", "Bat", "Cat", "Dog", "Elephant"];

// Initializing the five integer variables
$numbers = [20, 15, 30, 10, 5];

// Function to sort strings in ascending order 

function sortAscending(&$array) {
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if (strcmp($array[$i], $array[$j]) > 0) {
                // Swap values
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
}

// Function to sort strings in descending order 

function sortDescending(&$array) {
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if (strcmp($array[$i], $array[$j]) < 0) {
                // Swap values
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
}

// Function to sort numbers in ascending order 

function sortNumbersAscending(&$array) {
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] > $array[$j]) {
                // Swap values

                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
}


$firstNumber = $numbers[0];
$fifthNumber = $numbers[4];

// Initialize variables for sum, product, and average

$sum = array_sum($numbers);
$product = array_product($numbers);
$average = $sum / count($numbers);

// Perform actions based on divisibility

if ($firstNumber % $fifthNumber == 0) {

    // If divisible, display sum, product, and average

    $output = "First number $firstNumber is divisible by the fifth number $fifthNumber.<br>";
    $output .= "Sum: $sum<br>";
    $output .= "Product: $product<br>";
    $output .= "Average: " . round($average, 2) . "<br>";
} else {

    // If not divisible, sort numbers in ascending order

    sortNumbersAscending($numbers);
    $output = "First number ($firstNumber) is not divisible by the fifth number ($fifthNumber).<br>";
    $output .= "Numbers in ascending order: " . implode(", ", $numbers) . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String and Number Operations</title>
</head>
<body>
    <h1>String and Number Operations</h1>

    <h2>Strings in Ascending Order</h2>
    <ul>
        <?php
        // Sort and display strings in ascending order

        sortAscending($strings);
        foreach ($strings as $string) {
            echo "<li>$string</li>";
        }
        ?>
    </ul>

    <h2>Strings in Descending Order</h2>
    <ul>
        <?php
        // Sort and display strings in descending order

        sortDescending($strings);
        foreach ($strings as $string) {
            echo "<li>$string</li>";
        }
        ?>
    </ul>

    <h2>Numbers Operation</h2>
    <p><?php echo $output; ?></p>

<a href="javascript:void(0);" onclick="closeAndGoBack()">Back to Main Page</a>

<script>
    function closeAndGoBack() {
        window.close(); 
        window.location.href = "index.php";
    }
</script>

</body>
</html>

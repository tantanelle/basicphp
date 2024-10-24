<?php

// Declare whole number variables n and m
$n = 10; // Value for n
$m = 10; // Value for m

// Function to display multiplication table using for loop

function multiplicationTable($n, $m) {
    echo "<h2>Multiplication Table of $n x $m</h2>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    for ($i = 1; $i <= $n; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $m; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

// Function to display Fibonacci series using while loop

function fibonacciSeries($num) {
    $a = 0;
    $b = 1;
    $count = 0;
    $fibonacci = [];
    
    while ($count < $num) {
        array_push($fibonacci, $a);
        $sum = $a + $b;
        $a = $b;
        $b = $sum;
        $count++;
    }
    
    return implode(", ", $fibonacci);
}

// Function to compute factorial of n using do...while loop

function factorial($n) {
    $factorial = 1;
    $i = 1;
    
    do {
        $factorial *= $i;
        $i++;
    } while ($i <= $n);
    
    return $factorial;
}

// Function to compute summation of m using do...while loop

function summation($m) {
    $sum = 0;
    $i = 1;
    
    do {
        $sum += $i;
        $i++;
    } while ($i <= $m);
    
    return $sum;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Statements </title>
    <style>
        table { margin-bottom: 20px; }
        td { padding: 10px; text-align: center; }
    </style>
</head>
<body>
    Operations with n = <?php echo $n; ?> and m = <?php echo $m; ?>

    <!-- Multiplication Table -->
    <?php multiplicationTable($n, $m); ?>

    <!-- Fibonacci Series -->
    <h2>Fibonacci Series for n = <?php echo $n; ?> and m = <?php echo $m; ?></h2>
    <p><strong>Fibonacci Series of n:</strong> <?php echo fibonacciSeries($n); ?></p>
    <p><strong>Fibonacci Series of m:</strong> <?php echo fibonacciSeries($m); ?></p>

    <!-- Factorial and Summation using do...while -->
    <h2>Factorial and Summation</h2>
    <p><strong>Factorial of n (<?php echo $n; ?>):</strong> <?php echo factorial($n); ?></p>
    <p><strong>Summation of m 1 + 2 + ... + <?php echo $m; ?>: </strong> <?php echo summation($m); ?></p>

    <a href="javascript:void(0);" onclick="closeAndGoBack()">Back to Main Page</a>

<script>
    function closeAndGoBack() {
        window.close(); 
        window.location.href = "index.php";
    }

</script>

</body>
</html>

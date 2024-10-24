<?php
// Define the size of the NxN array
$n = 5; 

// Initialize the NxN array with random integers (between 1 and 100 )
$array = [];
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        $array[$i][$j] = rand(1, 100); // Fill the array with random integers
    }
}

// Function to calculate row and column sums and averages

function calculateRowColumnSums($array, $n) {
    $rowSums = [];
    $colSums = array_fill(0, $n, 0);
    $rowAverages = [];
    $colAverages = [];

    for ($i = 0; $i < $n; $i++) {
        $rowSums[$i] = array_sum($array[$i]);
        $rowAverages[$i] = $rowSums[$i] / $n;

        for ($j = 0; $j < $n; $j++) {
            $colSums[$j] += $array[$i][$j];
        }
    }

    for ($j = 0; $j < $n; $j++) {
        $colAverages[$j] = $colSums[$j] / $n;
    }

    return [$rowSums, $colSums, $rowAverages, $colAverages];
}

// Function to calculate diagonal sums and averages

function calculateDiagonalSums($array, $n) {
    $primaryDiagonalSum = 0;
    $secondaryDiagonalSum = 0;

    for ($i = 0; $i < $n; $i++) {
        $primaryDiagonalSum += $array[$i][$i]; // Primary diagonal (top-left to bottom-right)
        $secondaryDiagonalSum += $array[$i][$n - $i - 1]; // Secondary diagonal (top-right to bottom-left)
    }

    $primaryDiagonalAvg = $primaryDiagonalSum / $n;
    $secondaryDiagonalAvg = $secondaryDiagonalSum / $n;

    return [$primaryDiagonalSum, $secondaryDiagonalSum, $primaryDiagonalAvg, $secondaryDiagonalAvg];
}

// Function to find the overall smallest and largest numbers in the array

function findOverallMinMax($array, $n) {
    $overallMin = PHP_INT_MAX;
    $overallMax = PHP_INT_MIN;

    for ($i = 0; $i < $n; $i++) {
        $rowMin = min($array[$i]);
        $rowMax = max($array[$i]);
        $overallMin = min($overallMin, $rowMin);
        $overallMax = max($overallMax, $rowMax);
    }

    return [$overallMin, $overallMax];
}

// Function to find the smallest and largest numbers in each row and column

function findMinMaxInRowsAndColumns($array, $n) {
    $rowMin = [];
    $rowMax = [];
    $colMin = array_fill(0, $n, PHP_INT_MAX);
    $colMax = array_fill(0, $n, PHP_INT_MIN);

    for ($i = 0; $i < $n; $i++) {
        $rowMin[$i] = min($array[$i]);
        $rowMax[$i] = max($array[$i]);

        for ($j = 0; $j < $n; $j++) {
            $colMin[$j] = min($colMin[$j], $array[$i][$j]);
            $colMax[$j] = max($colMax[$j], $array[$i][$j]);
        }
    }

    return [$rowMin, $rowMax, $colMin, $colMax];
}

// Overall sum and average

$overallSum = 0;
$numberOfElements = $n * $n;

for ($i = 0; $i < $n; $i++) {
    $overallSum += array_sum($array[$i]);
}

$overallAverage = $overallSum / $numberOfElements;

// Perform calculations
list($rowSums, $colSums, $rowAverages, $colAverages) = calculateRowColumnSums($array, $n);
list($primaryDiagonalSum, $secondaryDiagonalSum, $primaryDiagonalAvg, $secondaryDiagonalAvg) = calculateDiagonalSums($array, $n);
list($overallMin, $overallMax) = findOverallMinMax($array, $n);
list($rowMin, $rowMax, $colMin, $colMax) = findMinMaxInRowsAndColumns($array, $n);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NxN Array Operations</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>NxN Array Operations (N = <?php echo $n; ?>)</h1>

    <!-- Display NxN array -->
    <h2>The NxN Array</h2>
    <table>
        <?php for ($i = 0; $i < $n; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < $n; $j++): ?>
                    <td><?php echo $array[$i][$j]; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

    <!-- Display row and column sums and averages -->
    <h2>Row and Column Sums and Averages</h2>
    <table>
        <tr>
            <th>Row</th>
            <th>Sum</th>
            <th>Average</th>
        </tr>
        <?php for ($i = 0; $i < $n; $i++): ?>
            <tr>
                <td><?php echo $i + 1; ?></td>
                <td><?php echo $rowSums[$i]; ?></td>
                <td><?php echo round($rowAverages[$i], 2); ?></td>
            </tr>
        <?php endfor; ?>
    </table>

    <table>
        <tr>
            <th>Column</th>
            <th>Sum</th>
            <th>Average</th>
        </tr>
        <?php for ($j = 0; $j < $n; $j++): ?>
            <tr>
                <td><?php echo $j + 1; ?></td>
                <td><?php echo $colSums[$j]; ?></td>
                <td><?php echo round($colAverages[$j], 2); ?></td>
            </tr>
        <?php endfor; ?>
    </table>

    <!-- Display diagonal sums and averages -->
    <h2>Diagonal Sums and Averages</h2>
    <p><strong>Primary Diagonal Sum:</strong> <?php echo $primaryDiagonalSum; ?></p>
    <p><strong>Primary Diagonal Average:</strong> <?php echo round($primaryDiagonalAvg, 2); ?></p>
    <p><strong>Secondary Diagonal Sum:</strong> <?php echo $secondaryDiagonalSum; ?></p>
    <p><strong>Secondary Diagonal Average:</strong> <?php echo round($secondaryDiagonalAvg, 2); ?></p>

    <!-- Display smallest and largest values -->
    <h2>Smallest and Largest Values in Rows and Columns</h2>
    <table>
        <tr>
            <th>Row</th>
            <th>Smallest</th>
            <th>Largest</th>
        </tr>
        <?php for ($i = 0; $i < $n; $i++): ?>
            <tr>
                <td><?php echo $i + 1; ?></td>
                <td><?php echo $rowMin[$i]; ?></td>
                <td><?php echo $rowMax[$i]; ?></td>
            </tr>
        <?php endfor; ?>
    </table>

    <table>
        <tr>
            <th>Column</th>
            <th>Smallest</th>
            <th>Largest</th>
        </tr>
        <?php for ($j = 0; $j < $n; $j++): ?>
            <tr>
                <td><?php echo $j + 1; ?></td>
                <td><?php echo $colMin[$j]; ?></td>
                <td><?php echo $colMax[$j]; ?></td>
            </tr>
        <?php endfor; ?>
    </table>

    <!-- Display overall smallest, largest, sum, and average -->
    <h2>Overall Statistics</h2>
    <p><strong>Overall Sum:</strong> <?php echo $overallSum; ?></p>
    <p><strong>Overall Average:</strong> <?php echo round($overallAverage, 2); ?></p>
    <p><strong>Overall Smallest Number:</strong> <?php echo $overallMin; ?></p>
    <p><strong>Overall Largest Number:</strong> <?php echo $overallMax; ?></p>


    
    <a href="javascript:void(0);" onclick="closeAndGoBack()">Back to Main Page</a>

<script>
    function closeAndGoBack() {
        window.close();
        window.location.href = "main.php";
    }
    
</script>

</body>
</html>

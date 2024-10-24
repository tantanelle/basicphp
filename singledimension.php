<?php
// Define the parallel arrays
$names = ["Nino John", "Janelle", "Cath", "Jasper", "Sheina",
          "Ysha", "Don", "Menzi Ann", "Kinneth", "Harddy"];
$ages = [25, 30, 22, 28, 26, 24, 29, 31, 27, 23];
$sexes = ["Male", "Female", "Female", "Male", "Male", "Male", "Female", "Male", "Male", "Female"];
$nationalities = ["American", "British", "Canadian", "Australian", "French", "German", "Spanish", "Italian", "Russian", "Chinese"];

// Function to sort parallel arrays by names
function sortByName(&$names, &$ages, &$sexes, &$nationalities) {
    $count = count($names);
    for ($i = 0; $i < $count - 1; $i++) {
        for ($j = $i + 1; $j < $count; $j++) {
            if (strcmp($names[$i], $names[$j]) > 0) {
                // Swap names and corresponding details
                swap($names[$i], $names[$j]);
                swap($ages[$i], $ages[$j]);
                swap($sexes[$i], $sexes[$j]);
                swap($nationalities[$i], $nationalities[$j]);
            }
        }
    }
}

// Helper function for swapping values
function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

// Function to display the information in table format
function displayPeople($names, $ages, $sexes, $nationalities, $title) {
    echo "<h2>$title</h2>";
    echo "<table class='styled-table'>";
    echo "<thead><tr><th>Name</th><th>Age</th><th>Sex</th><th>Nationality</th></tr></thead>";
    echo "<tbody>";
    for ($i = 0; $i < count($names); $i++) {
        echo "<tr>";
        echo "<td>{$names[$i]}</td>";
        echo "<td>{$ages[$i]}</td>";
        echo "<td>{$sexes[$i]}</td>";
        echo "<td>{$nationalities[$i]}</td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .styled-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            width: 100%;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th, .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .styled-table tbody tr:hover {
            background-color: #f1f1f1;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #009879;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #007f65;
        }
    </style>
</head>
<body>
    <h1>Ten People's Information</h1>

    <!-- Display unsorted list -->
    <?php displayPeople($names, $ages, $sexes, $nationalities, "Unsorted List"); ?>

    <!-- Sort the arrays by name -->
    <?php sortByName($names, $ages, $sexes, $nationalities); ?>

    <!-- Display sorted list -->
    <?php displayPeople($names, $ages, $sexes, $nationalities, "Sorted List (By Name)"); ?>

    <a href="javascript:void(0);" onclick="closeAndGoBack()">Back to Main Page</a>

<script>
    function closeAndGoBack() {
        window.close(); 
        window.location.href = "main.php";
    }

</script></body>
</html>

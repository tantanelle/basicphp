<?php
$floatNumbers = [1.23, 2.34, 3.45, 4.56, 5.67];
$wholeNumbers = [1, 2, 3, 4, 5];

$results = [
    "Round" => round($floatNumbers[0]),
    "Ceil" => ceil($floatNumbers[1]),
    "Floor" => floor($floatNumbers[2]),
    "Max" => max($wholeNumbers),
    "Min" => min($wholeNumbers),
    "Sin" => sin($wholeNumbers[1]),
    "Cos" => cos($wholeNumbers[2]),
    "Abs" => abs(-10),
    "Pow" => pow($wholeNumbers[3], 2),
    "Sqrt" => sqrt($wholeNumbers[4])
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions</title>
</head>
<body>
    <h1>Math Functions</h1>
    <ul>
        <?php foreach ($results as $function => $result) {
            echo "<li>$function: $result</li>";
        } ?>
    </ul>
    <a href="javascript:void(0);" onclick="closeAndGoBack()">Back to Main Page</a>

<script>
    function closeAndGoBack() {
        window.close(); 
        window.location.href = "main.php";
    }

</script>

</body>
</html>
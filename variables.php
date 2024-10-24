
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <h1>Variables</h1>

    <h2>Whole Numbers</h2>
    <ul>
        <?php 
        $wholeNumbers = [5, 10, 15, 20, 25];
        foreach ($wholeNumbers as $num) 
        echo "<li>$num</li>"; ?>
    </ul>

    <h2>Floating Point Numbers</h2>

    <ul>
        <?php 
        $floatNumbers = [3.14, 1.618, 2.71, 9.81, 0.577];
        foreach ($floatNumbers as $num) 
        echo "<li>$num</li>"; ?>
    </ul>

    <h2>Strings</h2>

    <ul>

        <?php 
        $strings = ["PHP", "HTML", "CSS", "JavaScript", "SQL"];
        foreach ($strings as $str) 
        echo "<li>$str</li>"; ?>

    </ul>

    <h2>Characters</h2>

    <ul>
        <?php 
        $characters = ['A', 'B', 'C', 'D', 'E'];
        foreach ($characters as $char) 
        echo "<li>$char</li>"; ?>

    </ul>

    <a href="javascript:void(0);" onclick="closeAndGoBack()">Back to Main Page</a>

<script>
    function closeAndGoBack() {
        window.close(); 
        window.location.href = "index.php";
    }
    
</script>


</body>
</html>

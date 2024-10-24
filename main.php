<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
    <style>
        body { 
            font-family: 'Cambria', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 50px;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            color: #2c3e50;
        }
        p {
            font-size: 1.2em;
            margin: 5px 0;
        }
        ul {
            list-style-type: none;
            padding-left: 0;
        }
        ul li {
            margin: 10px 0;
        }
        ul li a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            font-size: 1.1em;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        ul li a:hover {
            background-color: #3498db;
            color: #fff;
        }
        .box {
            padding: 20px;
            background-color: #ecf0f1;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .container {
                width: 95%;
            }
            h1 {
                font-size: 2em;
            }
            ul li a {
                padding: 8px 12px;
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Welcome to My PHP Project</h1>
            <p><strong>Created by:</strong> Menzi Ann Bacalso</p>
            <p><strong>Course/Yr/Section:</strong> BSIS 3-B</p>
            <ul>
                <li><a href="cv.php" target="_blank">1. Curriculum Vitae</a></li>
                <li><a href="variables.php" target="_blank">2. The Use of Variables</a></li>
                <li><a href="numbers.php" target="_ blank">3. Manipulating Numbers</a></li>
                <li><a href="math_functions.php" target="_blank">4. Using Math Functions</a></li>
                <li><a href="constants.php" target="_blank" >5. Using Constants</a></li>
                <li><a href="selection_statements.php" target="_blank">6. Selection Statements</a></li>
                <li><a href="loops.php" target="_blank" >7. Loop Statements</a></li>
                <li><a href="functions.php"target="_blank" >8. User-defined Functions</a></li>
                <li><a href="singledimension.php">9. Single-dimensional Array</a></li>
                <li><a href="twodimension.php">10. Two-dimensional Array</a></li>
            </ul>
        </div>
    </div>
    
</body>
</html>

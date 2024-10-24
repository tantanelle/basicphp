<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <style>
        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile {
            text-align: center;
        }

        .profile img {
            width: 150px;
            height: 150px;
            margin-bottom: 10px;
        }

        .profile h1 {
            font-size: 24px;
            margin: 0;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th {
            background-color: #d3d3d3;
            text-align: left;
            padding: 10px;
            font-size: 18px;
            font-weight: normal;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            font-size: 16px;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile">
        <img src="/images/menzi.jpg" alt="Profile Picture">
        <h1><?php echo "Menzi Ann Bacalso"; ?></h1>
        </div>

        <table>
            <!-- Contact Info Section -->
            <tr><th colspan="2">Contact Information:</th></tr>
            <tr><td>Address:</td><td><?php echo "Purok Mahogany, Sitio Tabuan, Guindaruhan Minglanilla Cebu, 6046"; ?></td></tr>
            <tr><td>Mobile No.:</td><td><?php echo "+63 9978761709"; ?></td></tr>
            <tr><td>Email:</td><td><?php echo "menziannbacalso2@gmail.com"; ?></td></tr>

            <!-- Personal Info -->
            <tr><th colspan="2">Personal Information:</th></tr>
            <tr><td>Age:</td><td><?php echo "23 years old"; ?></td></tr>
            <tr><td>Date of Birth:</td><td><?php echo "December 27, 2000"; ?></td></tr>
            <tr><td>Nationality:</td><td><?php echo "Filipino"; ?></td></tr>
            <tr><td>Gender:</td><td><?php echo "Female"; ?></td></tr>
            <tr><td>Marital Status:</td><td><?php echo "Single"; ?></td></tr>
            <tr><td>Temporary Residence:</td><td><?php echo "181 A. Jakosalem St. Zapatera Cebu City, 6000"; ?></td></tr>

            <!-- Educational Background Section -->
            <tr><th colspan="2">Educational Background:</th></tr>
            <tr><td>Elementary:</td><td><?php echo "Guindaruhan Elementary School"; ?></td></tr>
            <tr><td>Address:</td><td><?php echo "Guindaruhan, Minglanilla Cebu"; ?></td></tr>
            <tr><td>Year Graduated:</td><td><?php echo "S.Y 2011-2012"; ?></td></tr>

            <tr><td>Secondary:</td><td><?php echo "Guindaruhan National Highschool"; ?></td></tr>
            <tr><td>Address:</td><td><?php echo "Guindaruhan, Minglanilla Cebu"; ?></td></tr>
            <tr><td>Year Graduated:</td><td><?php echo "S.Y 2015-2016"; ?></td></tr>

            <tr><td>Senior High:</td><td><?php echo "Guindaruhan National Highschool"; ?></td></tr>
            <tr><td>Strand:</td><td><?php echo "General Academic Strand"; ?></td></tr>
            <tr><td>Address:</td><td><?php echo "Guindaruhan, Minglanilla Cebu"; ?></td></tr>
            <tr><td>Year Graduated:</td><td><?php echo "S.Y 2017-2018 "; ?></td></tr>

            <tr><td>Tertiary:</td><td><?php echo "Cebu Technological University- Main Campus"; ?></td></tr>
            <tr><td>Program:</td><td><?php echo "Bachelor of Science in Information System"; ?></td></tr>
            <tr><td>Address:</td><td><?php echo "M.J. Cuenco Ave, Cor R. Palma St., Cebu City, Philippines, 6000"; ?></td></tr>
            <tr><td>Graduation Date:</td><td><?php echo "S.Y 2025- 2026"; ?></td></tr>

            <!-- Skills Section -->
            <tr><th colspan="2">Skills:</th></tr>
            <tr><td>Basic Computer literacy skills</td><td>
            <tr><td>Time- management skills</td><td>
            <tr><td>Attention to Detail</td><td>
            <tr><td>Can work under pressure</td><td>
            
            <!-- Work Experience Section -->
            <tr><th colspan="2">Work Experience:</th></tr>
            <tr><td>Tokyo Microshaft Corporation</td><td>
            <tr><td>July 2021- September 2021</td><td>
            <tr><td>Position:</td><td><?php echo "Production Worker"; ?></td></tr>
            <tr><td>Work Immersion in Accounting Department</td><td>
            <tr><td>December 2017</td><td>
            <tr><td>Position:</td><td><?php echo "Stamper/ Writing code number of ledger"; ?></td></tr>

        </table>
    </div>
    
    <a href="javascript:void(0);" onclick="closeAndGoBack()">Back to Main Page</a>

<script>
    function closeAndGoBack() {
        // Attempt to close the current window (if it was opened by script)
        window.close(); 
        
        // Redirect to the main page
        window.location.href = "index.php";
    }
</script>

</body>
</html>

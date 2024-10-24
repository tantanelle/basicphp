<?php
// Data for Midterm Grades
$midtermQuizzes = [1.5, 2.0, 1.76]; // Midterm quizzes 
$midtermProjects = [1.3, 2.0];       // Midterm projects 
$midtermExam = 1.79;                 // Midterm major exam 

// Data for Tentative Final Grades
$finalQuizzes = [1.8, 2.0, 1.75];    // Tentative final quizzes 
$finalProjects = [1.3, 1.0];         // Tentative final projects 
$finalExam = 1.5;                    // Tentative final exam 

// Data for Final Grade 
$finalGradeQuizzes = [1.2, 2.1, 1.76];  // Final quizzes (GPA scale)
$finalGradeProjects = [1.2, 2.0];       // Final projects (GPA scale)
$finalGradeExam = 1.9;                  // Final major exam (GPA)

// Function to calculate grade for a period (midterm, tentative final)
function calculateGrade($quizzes, $projects, $exam) {
    $averageQuiz = array_sum($quizzes) / count($quizzes);
    $averageProject = array_sum($projects) / count($projects);
    
    // Apply the formula: grade = averageQuiz * 30% + averageProject * 20% + exam * 50%
    $grade = ($averageQuiz * 0.30) + ($averageProject * 0.20) + ($exam * 0.50);
    return round($grade, 2);  // Round to 2 decimal points for GPA scale
}

// Calculate Midterm Grade
$midtermGrade = calculateGrade($midtermQuizzes, $midtermProjects, $midtermExam);

// Calculate Tentative Final Grade
$tentativeFinalGrade = calculateGrade($finalQuizzes, $finalProjects, $finalExam);

// Calculate Final-Final Grade (average of Midterm and Tentative Final)
$finalFinalGrade = ($midtermGrade + $tentativeFinalGrade) / 2;

// Optionally, calculate the final period grade (based on final grades data)
$finalPeriodGrade = calculateGrade($finalGradeQuizzes, $finalGradeProjects, $finalGradeExam);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculation</title>
</head>
<body>
    <h1>Grade Calculation for CTU Students</h1>
    <p><strong>Midterm Grade:</strong> <?php echo $midtermGrade; ?></p>
    <p><strong>Tentative Final Grade:</strong> <?php echo $tentativeFinalGrade; ?></p>
    <p><strong>Final-Final Grade:</strong> <?php echo round($finalFinalGrade, 2); ?></p>

    

    <a href="javascript:void(0);" onclick="closeAndGoBack()">Back to Main Page</a>

<script>
    function closeAndGoBack() {
        window.close();
        window.location.href = "main.php";
    }
    
</script>

    
</body>
</html>

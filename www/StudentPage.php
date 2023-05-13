<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACE TRAINING </title>
    <link rel = "stylesheet" href="style.css">

</head>
<?php
session_start();
$_SESSION['loginFirstname'];
$_SESSION["loginLastname"];

$firstname = $_SESSION['loginFirstname']; 
$lastname = $_SESSION["loginLastname"] ;
//include "LogMeIn.php";



?>
<body>
    <div class = "hero">
        <?php include "studentNav.php" ?>


        <div class="StudentLinks">

            <a href="StudentResources.php" class="StudentButton">Resources</a>

            <a href="StudentReading.php" class="StudentButton">Reading</a>
 
            <a href="StudentQuiz.php" class="StudentButton">Quizzes</a>


        </div>

        <div class="StudentCourses">
            <table class="courses-table">
            <thead>
                <tr>
                    <th>Course ID</th>
                    <th>Course Name</th>
                    <th>Teacher</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Dom</td>
                    <td>6000</td>
                </tr>
                <tr class="active-row">
                    <td>Melissa</td>
                    <td>5150</td>
                </tr>
                <!-- and so on... -->
            </tbody>
        </table>
        </div>

        
    </div>
    
</body>

</html>
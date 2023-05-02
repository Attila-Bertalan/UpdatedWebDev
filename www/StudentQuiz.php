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
$firstname = $_SESSION['loginFirstname']; 
$lastname = $_SESSION["loginLastname"] ;
$user_ID = $_SESSION['loginID'];



?>
<body>
    <div class = "hero">
        <nav class = "hero">
            <img src="images/menu.png" class ="menu-img" width="50" height="50">
            <img src="images/logo.png" class ="logo" width="75" height="65">
            <ul>
                <li>
                
                <p><?php echo 'Welcome back '.$firstname .' '. $lastname.' !' ?> &nbsp; <img src="images/avatar1.png" id="Avatar" style="width: 4%"></p>
                </li>
                <li>
                    <a href="LogMeOut.php">Logout</a>
                </li>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>

            </ul>
        </nav>

        <div class="StudentLinks">

            <a href="StudentResources.php" class="StudentButton">Resources</a>

            <a href="StudentReading.php" class="StudentButton">Reading</a>
 
            <a href="StudentPage.php" class="StudentButton">Student Home</a>


        </div>
        
        <?php
       
        
            // connect to the database
            $conn = mysqli_connect("localhost", "root", "root", "acetraining");

            // get the quiz questions from the database
            $sql = "SELECT * FROM quiz";
            $result = mysqli_query($conn, $sql);

            // display the quiz questions in a form
            echo '<form method="post">';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<p>' . $row['question'] . '</p>';
                echo '<input type="radio" name="answer' . $row['quiz_id'] . '" value="1">' . $row['option1'] . '<br>';
                echo '<input type="radio" name="answer' . $row['quiz_id'] . '" value="2">' . $row['option2'] . '<br>';
                echo '<input type="radio" name="answer' . $row['quiz_id'] . '" value="3">' . $row['option3'] . '<br>';
                echo '<input type="radio" name="answer' . $row['quiz_id'] . '" value="4">' . $row['option4'] . '<br>';
            }
            echo '<input type="submit" name="submit" value="Submit">';
            echo '</form>';

            // process the quiz form
            if (isset($_POST['submit'])) {
                $score = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $answer = $_POST['answer' . $row['quiz_id']];
                    if ($answer == $row['answer']) {
                        $score++;
                    }
                }

                // save the user's score to the database

                $stmt = $conn -> prepare('INSERT INTO scores(user_ID, score) VALUES(?,?)');
                $stmt -> bind_param("ii", $user_ID, $score);
                $stmt -> execute();
                $stmt ->close();

                // display the user's score
                echo 'Your score is ' . $score;
            }
        
        
        
        
        
        
        ?>
        

        
    </div>
    
</body>

</html>
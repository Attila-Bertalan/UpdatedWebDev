<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACE TRAINING </title>
    <link rel = "stylesheet" href="style.css">
</head>

<body>
    <div class = "hero">
        <nav class = "header">
            <img src="images/menu.png" class ="menu-img" width="50" height="50">
            <img src="images/logo.png" class ="logo" width="50" height="50">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="register.php">Register</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
            </ul>
        </nav>

        <div class = "loginContainer">
            <form action="LogMeIn.php" method="post">

                Email:<input type="text" id="email" name="email" type="text" required><br>
                Password:<input type="password" id="password" name="password" required>
                <input type="checkbox" onClick="showPassword()"/>Show password
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>   
    <script>
        function showPassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>
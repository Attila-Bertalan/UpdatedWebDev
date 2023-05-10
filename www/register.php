<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <script defer src="registerScript.js"></script> -->
    <script type="text/javascript" src="script.js"></script>
    <title>Registration</title>
</head>

<body>
    <div class = "hero">
        <?php include "nav.php" ?>
    </div>

    <form id="form" name="frmRegister" action="registration.php" onsubmit = "return validateForm()" method="POST">
        <div>
            <div class="input-control">
                <label for="First">First Name:</label>
                <input id="First" name="firstname" type="text">
            </div>
        </div>

        <div>
            <div class="input-control">
            <label for="Last">Last Name:</label>
            <input id="Last" name="lastname" type="text">
            </div>
        </div>

        <div>
            <div class="input-control">
            <label for="Password">Password:</label>
            <input id="Password" name="password" type="password">
            </div>
        </div>


        <div>
            <div class="input-control">
            <label for="email">Email:</label>
            <input id="email" name="email" type="text" placeholder="example@email.com">
            <input type="hidden" name="authorised" value="0">
            <input type="hidden" name="isTutor" value="0">
            <input type="hidden" name="isAdmin" value="0">
            </div>
        </div>


        <button class="submitButton" type="submit">submit</button>

    </form>
    
</body>

</html>
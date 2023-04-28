<?php 

    $firstname = $_POST ['firstname']  ;
    $lastname = $_POST ['lastname'];
    $pass =$_POST ['password'] ;
    //$gender = $_POST ['gender'];
    $email = $_POST ['email'];
    //$phone = $_POST ['phone'];
    $authorised = $_POST['authorised'];
    $isTutor = $_POST['isTutor'];
    $isAdmin = $_POST['isAdmin'];

    $conn = mysqli_connect("localhost","root","root","acetraining");
    
    if(mysqli_connect_errno()){
        echo"failed to connect to mysql: " . mysqli_connect_error();

    }else{
        

        $stmt = $conn -> prepare('INSERT INTO users(firstname, lastname, pass, email, authorised, isTutor, isAdmin) VALUES(?,?,?,?,?,?,?)');
        $stmt -> bind_param("ssssiii", $firstname,$lastname,$pass,$email,$authorised,$isTutor,$isAdmin);
        
        $stmt ->execute();
        header("refresh:5; url=index.php");
        echo"reg success, you will be redirected in 5 seconds.";
        $stmt ->close();
        $conn ->close();
        

    }



    
?>
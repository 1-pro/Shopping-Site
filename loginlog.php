<?php


//initiating variables

$username ="";$email="";

// connect to db


$errors = [];
$db = mysqli_connect("localhost", "root", "", "project1") or die("could not connect to db");



if(isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($db, $_POST['userName']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if(empty($username)){
        array_push($errors, "Username is required");
        
    }
    if(empty($password)){
        array_push($errors, "password is required");

    }

    if(count($errors) == 0){
        $password = md5($password);

        $query = "SELECT * FROM user WHERE userName = '$username' AND password= '$password'";
        $results = mysqli_query($db, $query);
        

        // $getName = "SELECT fname FROM user  WHERE username= '$username' AND password ='$password'";

        // $nameResult = mysqli_query($db, $getName);
        $names = mysqli_fetch_assoc($results);

        $_SESSION['name'] = $names['fname'];
        if(mysqli_num_rows($results)){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "logged in successfully";

        }else{
            array_push($errors, "Incorrect username or password");
            
        }
        header("Location: index1.php");
    }
}
<?php
const ROOT ='mysql:dbname=e_classe_db;host=localhost;port=3306';
const USERNAME ='root';
const PASSWORD='';

$pdo=new PDO(ROOT,USERNAME,PASSWORD);

session_start();
$email = $_POST['email'];
$password = $_POST['password'];
if (empty($email)) {
    header('location:login.php?error=Enter email please');
} else if (empty($password)) {
    header('location:login.php?error=Enter password please');
} else {

    $users = $pdo->prepare("SELECT * FROM users WHERE email='$email' AND password='$password'");
    $users->execute();
    $user = $users->fetch();
    $user_name = $user['name'];
    $user_email = $user['email'];
    $user_password = $user['password'];
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('location:login.php?error=invalid format email');
    }


    else if ($email === $user_email && $password === $user_password) {
        $_SESSION['user_name'] =  $user_name;
        $_SESSION['user_email'] = $user_email;
        $_SESSION['user_password'] = $user_password;
        if(isset($_POST['check'])){
            setcookie('user',$_SESSION['user_email'],time()+(365243600),'/');
            setcookie('user_p',$_SESSION['user_password'],time()+(365243600),'/');
        }
        header('location:index.php'); 
    } 
    else {
        header('location:login.php?error=password or email is incorrect');
    }
}



?>
<?php 
 session_start();

$plays= array('rock', 'paper', 'scissors');

$user=htmlspecialchars(stripslashes($_POST['username']));
$choiced = trim($_POST['choice']);

$_SESSION['sess_user'] = $user; 
$_SESSION['sess_choiced'] = $choiced; 


if(empty($_SESSION['sess_user'])) {
 
    $_SESSION['message'] = 'Please, enter your name';


     header('location:index.php');
  

}

else {

        $selection = rand(0,2);
        $select_t2000=$plays[$selection];
        $_SESSION['sess_t2000'] = $select_t2000;
        header('location:results.php');

}


?>
<!-- post -->
<?php
session_start();

// echo $_POST['num'] + $_POST['num2'];
// print_r($_POST);
// echo "<br>";


// detabase connection // 

require 'db.php';

// detabase connection // 


$name = $_POST ['name'];
$email = $_POST ['email'];
$password = $_POST ['password'];
$confirm_password = $_POST ['confirm_password'];


// if (empty($name)){
//     $error = 'plese enter your name';
//  header('location:index.php?name_error='.$error);
// }


// pewvioua

$_SESSION['old_name'] = $name;
$_SESSION['old_email'] = $email;
$_SESSION['old_password'] = $password;
$upper = preg_match('@[A-Z]@', $password);
$lower = preg_match('@[a-z]@', $password);
$number = preg_match('@[0-9]@', $password);
$spacial = preg_match('@[#,$,%,^,&,*]@', $password);


if (empty($name)){
    $_SESSION['name-error'] = 'Please Enter Your Name';
    header('location:index.php');
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['email-error'] = 'Please Enter Valid  Email address';
    header('location:index.php');
}

else if(empty($password)){
    $_SESSION['password-error'] = 'Please Enter Your password';
    header('location:index.php');
}
else if (!$upper || !$lower || !$number || !$spacial || strlen($password) < 8){
    $_SESSION['password-error'] = ' password must be an uppercase , Lowercase , Number, spacial careacter and min 8 carecter';
    header('location:index.php');
}

else if(empty($confirm_password)){
    $_SESSION['confirm_password-error'] = 'Please Enter Your Confirm password';
    header('location:index.php');
}
else if($password != $confirm_password){
    $_SESSION['confirm_password-error'] = ' password and confirm password dose not match';
    header('location:index.php');
}

else{

    $insert = "INSERT INTO users(name, email, password)VALUES('$name', '$email', '$password')";

    $insert_result = mysqli_query($bd_connection,  $insert);

    $_SESSION['success'] = 'Regestation successfully';

    unset($_SESSION['old_name'] );
    unset($_SESSION['old_email'] );
    unset($_SESSION['old_password'] );
    header('location:index.php');
}




?> 
<?php

$error="";
$success="";
    if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
        if($username=="admin"){
            if($password==123){
                $error="";
                $success="Welcome admin";
                header("location:index.html");
            }
            else{
                $error="invalid password";
                $success="";
            }
        }
        else{
            $error="invalid username";
            $success="";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <p class="error"><?php echo $error ?></p><p class="success"><?php echo $success ?></p>
        <input type="text" name="username" placeholder="Username" require><br>
        <input type="password" name="password" placeholder="Password" require><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
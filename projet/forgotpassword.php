
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/Login.css">
</head>
<body>
<div class="wrapper">
    <form action="send_password.php" method="post">
       <h1>Forgot Password</h1>
        <div class="input-box">
            <input type="text"  name="email" placeholder="email" required>
            <i class='bx bxs-user'></i>
        </div>
         <button type="submit" class="btn" name="submit" value="login">Submit</button>
         <div class="register-link">
            <p>Don't have an account ? <a href="Sign up.php">Sign up</a></p>
         </div>
    </form>
</div>    
</body>
</html>
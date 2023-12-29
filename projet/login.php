
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
<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    +
    
    require_once "db.php";
    
    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // ... (votre code existant)

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user["Password"])) {
        // Mot de passe correct
        $status = strtolower($user["statut"]); // Convertir le statut en minuscules
        
        if (strcasecmp($status, "owner") === 0) {
            header("Location: loged_home.php");
            exit();
        } elseif (strcasecmp($status, "client") === 0) {
            header("Location: loged_home_client.php");
            exit();
        } else {
            // Statut inconnu, gérer le cas ici
            echo "<div>Unknown user status</div>";
        }
    } else {
        // Mot de passe incorrect
        echo "<div>Password incorrect</div>";
    }
} else {
    // Aucun utilisateur avec cet email
    echo "<div>Email not found</div>";
}
}

?>
    <form action="login.php" method="post">

        <h1>Login</h1>
        <div class="input-box">
            <input type="text"  name="email" placeholder="email" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt'></i>
        </div>
         <div class="remember-forgot">
            <label>
                <a href="forgotpassword.php">Forgot password? </a>
         </div>
         <?php
        // Check if the session message is set
        if (isset($_SESSION['logout_message'])) {
            // Display an alert using JavaScript
            echo '<script>alert("' . $_SESSION['logout_message'] . '");</script>';

            // Unset the session message after displaying it
            unset($_SESSION['logout_message']);
        }
        ?>

         <button type="submit" class="btn" name="submit" value="login">Login</button>
         <div class="register-link">
            <p>Don't have an account ? <a href="Sign up.php">Sign up</a></p>
         </div>
    </form>
</div>    
</body>
</html>
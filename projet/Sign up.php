<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="css/Sign up .css">
</head>
<!-- header section starts  -->
<body>
<div class="container">
<?php 
if(isset($_POST['submit'])){
    $firstname = $_POST['first'];
    $lastname =  $_POST['last'];
    $username = $_POST['username'];
    $email =  $_POST['email'];
    $password =  $_POST['password'];
    $number = $_POST['number'];
    $address =  $_POST['Address'];
    $statut = $_POST['statut'];
    $errors = array();
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $Statut = strtolower($statut);


    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
    }
    if(strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters");
    }
    require_once "db.php";

    $sql = "SELECT * FROM user WHERE email= ?";
    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $rowcount = mysqli_num_rows($result);

        if($rowcount > 0){
            array_push($errors, "Email already exists");
        }
    }

    // Vérification de la valeur du statut
    if ($Statut !== 'owner' && $Statut !== 'client') {
        array_push($errors, "Invalid status entered");
    }

    if(count($errors) > 0){
        foreach($errors as $error){
            echo "<div> $error</div>";
        }
    } else {
        $sql = "INSERT INTO user (First_name, Last_name, Username, Email, Password, Phone_number, Address , statut )
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);

        if (mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssssssss", $firstname, $lastname, $username, $email, $passwordHash, $number, $address, $statut);
            
            if (mysqli_stmt_execute($stmt)) {
                echo "<div>You are signed up</div>";
                header('location: loged_home.php');
            } else {
                die("Error executing the statement: " . mysqli_error($conn));
            }
        } else {
            die("Error preparing the statement: " . mysqli_error($conn));
        }
    }
}
?>

  <h1 class="form-title">Sign up</h1>
  <form action="Sign up.php" method="post">
    <div class="main-user-info">
        <div class="user-input-box">
            <input type="text" id="first" name="first" placeholder="Enter First Name" required>
        </div>
        <div class="user-input-box">
            <input type="text" id="last" name="last" placeholder="Enter Last Name" required>
        </div>
        <div class="user-input-box">
            <input type="text" id="username" name="username" placeholder="Enter Username"required>
        </div>
        <div class="user-input-box">
            <input type="text" id="email" name="email" placeholder="Enter Email"required>
        </div>
        <div class="user-input-box">
            <input type="password" id="password" name="password" placeholder="Password" required>
        </div>
        <div class="user-input-box">
            <input type="text" id="number" name="number" placeholder="Phone Number"required>
        </div>
        <div class="user-input-box">
            <input type="text" id="address" name="Address" placeholder="Address"required>
        </div>
        <div class="user-input-box">
            <input type="text" id="Statut" name="statut" placeholder="Owner or Client" required>
        </div>
    </div>
    
    <div class="form-submit-btn" >
        <input  type="submit" name="submit" value="Sign up">
    </div>
</form>

</div></body>
</html>
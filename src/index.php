<?php

require_once 'db.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare('SELECT id, name, password, role FROM users WHERE email  = ?');
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_role'] = $user['role'];

            echo 'Successful Login! Welcome ' . $user['name'];

            header('Location: dashboard.php');
            exit();

        } else {
                echo "<script src='scripts.js'></script>";
                echo "<script>incorrectPassword();</script>";

        }
    } else {

        echo "<script src='scripts.js'></script>";
        echo "<script>emailNotFound();</script>";
    }

    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ranbir's Bicycles </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link type="image/png" sizes="32x32" rel="icon" href="images/logo.png">

</head>

<style>
    body {
        background-image: url('images/bicycles.png');
        background-repeat: repeat;
        background-position: top left;
        margin: 0;
        padding: 0;
    }


    .card {
        margin-bottom: 20px;
        border: none;
    }

    .box {
        max-width: 90%;
        width: 500px;
        padding: 40px;
        background: #191919;
        text-align: center;
        transition: 0.25s;
        
        
    }

    .box input[type="email"],
    .box input[type="password"] {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #3498db;
        padding: 10px 10px;
        width: 250px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s
    }

    .box h1 {
        color: white;
        text-transform: uppercase;
        font-weight: 500
    }

    .box input[type="email"]:focus,
    .box input[type="password"]:focus {
        width: 300px;
        border-color: #2ecc71
    }

    .box input[type="submit"] {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #2ecc71;
        padding: 14px 40px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer
    }

    .box input[type="submit"]:hover {
        background: #2ecc71
    }

    .forgot {
        text-decoration: underline
    }
</style>


<body class="d-flex flex-column justify-content-center align-items-center vh-100">
    <div class="container text-center text-light">
        <h1 class="fst-italic text-decoration-underline" style="font-size: 100px;">Ranbir's Cycles</h1>
        <svg xmlns="http://www.w3.org/2000/svg" width="160" height="160" fill="currentColor" class="bi bi-bicycle" viewBox="0 0 16 16">
        <path d="M4 4.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1v.5h4.14l.386-1.158A.5.5 0 0 1 11 4h1a.5.5 0 0 1 0 1h-.64l-.311.935.807 1.29a3 3 0 1 1-.848.53l-.508-.812-2.076 3.322A.5.5 0 0 1 8 10.5H5.959a3 3 0 1 1-1.815-3.274L5 5.856V5h-.5a.5.5 0 0 1-.5-.5m1.5 2.443-.508.814c.5.444.85 1.054.967 1.743h1.139zM8 9.057 9.598 6.5H6.402zM4.937 9.5a2 2 0 0 0-.487-.877l-.548.877zM3.603 8.092A2 2 0 1 0 4.937 10.5H3a.5.5 0 0 1-.424-.765zm7.947.53a2 2 0 1 0 .848-.53l1.026 1.643a.5.5 0 1 1-.848.53z"/>
</svg>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="col-12 col-md-6">

                <form action="index.php" method="post" class="box rounded m-auto">
                    <h1>Login Here</h1>
                    <p class="text-light"> Please enter your login and password!</p>
                    <input type="email" name="email" placeholder="Enter Email" required>
                    <input type="password" name="password" placeholder="Enter Password" required>
                    <a class="forgot link-info" href="signup.php">Don't Have an Account? Sign Up!</a>
                    <input type="submit" name="login" value="Login">
                </form>

        </div>
    </div>
</body>

</html>


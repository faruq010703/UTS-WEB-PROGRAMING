<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <form id="loginform" method = "POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="#">Register</a></p>  
            </div>
        </form>
        
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Start session
        session_start();

        // Example hardcoded credentials
        $validUsername = "user123";
        $validPassword = "pass123";

        header('Content-Type: application/json');

        // Retrieve form data
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validate credentials
        if ($username === $validUsername && $password === $validPassword) {
            $_SESSION['logged_in'] = true;
            return json_encode(["status" => "success", "message" => "Login successful"]);
        } else {
            return json_encode(["status" => "error", "message" => "Invalid username or password"]);
        }
    }
    ?>

    <script src="script.js" > </script>
</body>
</html>

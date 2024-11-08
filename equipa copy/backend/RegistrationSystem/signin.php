<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body>

<h2>Sign In</h2>

<form action="signin.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit">Sign In</button>
    <br>
    <br>
    <a href="signup.php">Ainda não és cliente?!?! Deixa-nos ajudar-te!</a>
</form>

</body>
</html>
<?php
session_start(); // Start the session
require '/Applications/XAMPP/xamppfiles/htdocs/equipa/backend/Util/db_connection.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database connection

    // Sanitize user input
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Query to get the user's data based on the provided email
    $sql = "SELECT id, nome, password FROM users WHERE email = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $email);

        // Execute the statement
        $stmt->execute();

        // Bind the result variables
        $stmt->bind_result($id, $nome, $hashed_password);

        // Fetch the result (check if a user with that email exists)
        if ($stmt->fetch()) {
            // Verify the password
            if (password_verify($password, $hashed_password)) {
                // Password is correct, start the session and store user data
                $_SESSION['user_id'] = $id;
                $_SESSION['user_name'] = $nome;

                // Redirect to a dashboard or home page after successful login
                echo "Login successful! Welcome, " . $nome;
                header("Location: ../../index.php");
                exit();
            } else {
                echo "Incorrect password.";
            }
        } else {
            echo "No user found with that email address.";
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error preparing the statement: " . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>

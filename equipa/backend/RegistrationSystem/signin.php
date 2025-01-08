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
require '/Applications/XAMPP/xamppfiles/htdocs/equipa/backend/Util/db_connection.php'; // Include PDO connection

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize user input
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        // Query to get the user's data based on the provided email
        $sql = "SELECT id, nome, password FROM users WHERE email = :email";

        // Prepare the statement
        $stmt = $conn->prepare($sql);

        // Bind the parameter using bindParam
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);

        // Execute the statement
        $stmt->execute();

        // Check if a user with that email exists
        if ($stmt->rowCount() > 0) {
            // Fetch the result
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $id = $user['id'];
            $nome = $user['nome'];
            $hashed_password = $user['password'];

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
    } catch (PDOException $e) {
        // Catch any PDO-related errors
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@24.6.0/build/css/intlTelInput.css">
</head>
<body>

<h2>Sign Up</h2>

<form action="signup.php" method="POST">
    <label for="nome">Name:</label>
    <input type="text" id="nome" name="nome" required><br><br>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone_number" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit">Sign Up</button>
    <br><br>
    <a href="signin.php">Já és cliente?</a>

</form>

</body>
</html>

<?php
require '/Applications/XAMPP/xamppfiles/htdocs/equipa/backend/Util/db_connection.php'; // Make sure this is pointing to the correct PDO connection

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize user input
    $nome = $_POST['nome'];
    $telefone = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $admin = 0;

    // Hash the password using bcrypt
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    try {
        // Prepare SQL statement with named placeholders
        $sql = "INSERT INTO users (admin, nome, telefone, email, password) VALUES (:admin, :nome, :telefone, :email, :password)";

        // Prepare the statement
        $stmt = $conn->prepare($sql);

        // Bind the parameters
        $stmt->bindParam(':admin', $admin, PDO::PARAM_INT);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':telefone', $telefone, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Sign up successful!";
        } else {
            echo "Error: Unable to execute the statement.";
        }
    } catch (PDOException $e) {
        // Catch any PDO-related errors
        echo "Error: " . $e->getMessage();
    }
}
?>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@24.6.0/build/js/intlTelInput.min.js"></script>
<script>
    const input = document.querySelector("#phone");
    window.intlTelInput(input, {
        loadUtilsOnInit: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.6.0/build/js/utils.js",
    });
</script>

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
    <br>
    <br>
    <a href="signin.php">Já és cliente?</a>

</form>

</body>
</html>
<?php
require '/Applications/XAMPP/xamppfiles/htdocs/equipa/backend/Util/db_connection.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database connection
    // Sanitize user input
    $nome = $conn->real_escape_string($_POST['nome']);
    $telefone = $conn->real_escape_string($_POST['phone_number']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];
    $admin=0;



    // Hash the password using bcrypt
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Prepare SQL statement
    $sql = "INSERT INTO users (admin, nome, telefone, email, password) VALUES (?, ?, ?, ?, ?)";

    // Using prepared statements to avoid SQL injection
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("issss", $admin,$nome, $telefone, $email, $hashed_password);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Sign up successful!";
        } else {
            echo "Error: " . $stmt->error;
            echo $telefone;
        }

        // Close statement and connection
        $stmt->close();
    } else {
        echo "Error preparing the statement: " . $conn->error;
    }

    $conn->close();
}

?>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@24.6.0/build/js/intlTelInput.min.js"></script>
<script>
    const input = document.querySelector("#phone");
    window.intlTelInput(input, {
        loadUtilsOnInit: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.6.0/build/js/utils.js",
    });
</script>




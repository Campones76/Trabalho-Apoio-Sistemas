<?php
// Start the session
session_start();

// Destroy all session data
session_unset();
session_destroy();

// Redirect to the home page or login page after logout
header("Location: ../../index.php");
exit();
?>

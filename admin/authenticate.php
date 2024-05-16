<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Change this to your connection info.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Try to connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if username and password were provided
if (empty($_POST['username']) || empty($_POST['password'])) {
    exit('Please fill both the username and password fields!');
}

// Prepare our SQL statement to select the user's hashed password and salt
$stmt = $conn->prepare('SELECT id, hashed_password, salt FROM accounts WHERE username = ?');
$stmt->bind_param('s', $_POST['username']);
$stmt->execute();
$stmt->store_result();

// Check if the account exists
if ($stmt->num_rows > 0) {
    // Bind the result variables
    $stmt->bind_result($id, $hashed_password, $stored_salt);
    $stmt->fetch();

    // Verify the password
    $entered_password = $_POST['password'];
    $hashed_entered_password = hash('sha256', $stored_salt . $entered_password); // Hash entered password with stored salt

    // Debugging output (optional)
     var_dump($hashed_password, $stored_salt, $hashed_entered_password);

    if ($hashed_entered_password === $hashed_password) {
        // Password is correct, start a session
        session_regenerate_id();
        $_SESSION['loggedin'] = true;
        $_SESSION['name'] = $_POST['username'];
        $_SESSION['id'] = $id;
        
        // Redirect to upload.php upon successful login
        header('Location: upload.php');
        exit;
    } else {
        // Incorrect password
        echo 'Incorrect username and/or password!';
    }
} else {
    // Incorrect username
    echo 'Incorrect username and/or password!';
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>

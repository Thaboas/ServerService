<!-- ContactFormHandler.php -->
<?php
// Establish a database connection
$servername = "your_database_server";
$username = "your_database_username";
$password = "your_database_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Insert the message into the database
    $sql = "INSERT INTO ContactMessages (Name, Email, Message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Close the database connection
        $conn->close();

        // Include the thank you message
        include 'thank-you-message.php';

        // Redirect to the thank you page
        header("Location: thank-you.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

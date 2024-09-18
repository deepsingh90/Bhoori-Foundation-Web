<?php
// Include database and admin class files
include_once 'Database.php';
include_once 'Admin.php';

// Start session to manage login status
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "Email: " . $_POST['email'] . "<br>";
    echo "Password: " . $_POST['password'] . "<br>";
    
    
    


    // Initialize database connection
    $database = new Database();
    $db = $database->getConnection();

    // Create an Admin object
    $admin = new Admin($db);

    // Check login credentials
    if ($admin->login($email, $password)) {
        // If successful, set session and redirect to the dashboard
        $_SESSION['admin_logged_in'] = true;
        header("Location: ../Admin/index.php"); // Dashboard to be created
        exit;
    } else {
        // If login fails, redirect back to login with an error

        $login_error = "Invalid email or password! $email $password";
    }
}
?>

<!-- Display error message if login fails -->
<?php if (isset($login_error)): ?>
    <p style="color:red;"><?php echo $login_error ; ?></p>
<?php endif; ?>

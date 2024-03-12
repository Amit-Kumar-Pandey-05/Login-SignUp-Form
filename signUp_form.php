<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input fields
    $name = $_POST['Name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $reentered_password = $_POST['reentered_password'];

    // Password validation
    $password_regex = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()-_+=])[a-zA-Z\d!@#$%^&*()-_+=]{8,15}$/';
    if (!preg_match($password_regex, $password)) {
        echo "Password must be 8 to 15 characters long and include at least one special character, one uppercase letter, one lowercase letter, and one number.";
        exit;
    }

    // Check if passwords match
    if ($password !== $reentered_password) {
        echo "Passwords do not match. Please re-enter your password.";
        exit;
    }


// Send email with form data
    $to = "amitaur87@mail.com";
    $subject = "New user registration";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Password: $password\n";

    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for registering. We will contact you shortly.";
    } else {
        echo "Sorry, an error occurred. Please try again later.";
    }

    // Register user: Save details to a text file
    $user_data = "$name,$email,$password\n"; // Format: Name,Email,Password
    file_put_contents('users.txt', $user_data, FILE_APPEND);

    echo "Thank you for registering. You can now log in with your credentials.";
}
?>

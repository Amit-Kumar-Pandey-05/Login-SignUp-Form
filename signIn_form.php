<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input fields
    $email = $_POST['Email'];
    $password = $_POST['password'];

    // Read user data from the file
    $users_data = file_get_contents('users.txt');

    // Split user data into an array of lines
    $users = explode("\n", $users_data);

    // Loop through each user's data
    $login_successful = false;
    foreach ($users as $user) {
        // Split user data into an array of fields
        $user_fields = explode(",", $user);
        // Check if email and password match
        if ($user_fields[1] === $email && $user_fields[2] === $password) {
            $login_successful = true;
            break;
        }
    }

    if ($login_successful) {
        echo "Login successful. Welcome back!";
    } else {
        echo "Invalid email or password. Please try again.";
    }
}
?>

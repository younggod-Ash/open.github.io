<?php

// Get the username, password, and redirect URL from the form
$username = $_POST['username'];
$password = $_POST['password'];
$redirect_url = $_POST['redirect_url'];

// Check if the username and password match the expected values
if ($username === 'admin' && $password === 'password') {
  // Redirect the user to the specified URL
  header("Location: $redirect_url");

  // Display a success message
  echo '<p>You have successfully logged in!</p>';
} else {
  // Display an error message
  echo '<p>Invalid username or password.</p>';
}

?>
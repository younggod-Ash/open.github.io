<?php

// Get the username, password, and return URL from the form
$username = $_POST['username'];
$password = $_POST['password'];
$returnurl = $_POST['returnurl'];

// Check if the username and password match the expected values
if ($username === 'admin' && $password === 'password') {
  // Redirect the user to the specified URL
  header("Location: $returnurl");

  // Display a success message
  echo '<p>You have successfully logged in!</p>';
} else {
  // Display an error message
  echo '<p>Invalid username or password.</p>';
}

?>

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
  echo '<div class="container">';
  echo '<p>You have successfully logged in!</p>';
  echo '<a href="https://www.google.com" target="_blank">Continue to Google</a>';
  echo '</div>';
} else {
  // Display an error message
  echo '<div class="container">';
  echo '<p>Invalid username or password.</p>';
  echo '</div>';
}

?>

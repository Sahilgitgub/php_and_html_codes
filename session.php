
<?php 

// Start the session
session_start(); 

// Store Session Data
$_SESSION['username']='John Doe<br>'; 
$_SESSION['email']='john@example.com'; 

// Retrieve Session Data
echo 'Username is ' . $_SESSION['username']; 
echo 'Email is ' . $_SESSION['email']; 

?>
<?php

// Includes
require 'classes/user.php';

// Initialize variables
$user = new User("kasbury");

// Return user role
echo "kasbury = " . $user->getRole();

 ?>

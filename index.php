<?php

// Includes
require 'classes/user.php';
require 'classes/supervisor.php';

// Initialize variables
$user = new User("kasbury");
$supervisor = new Supervisor(0);

// Return user role
print_r($supervisor->getPrograms());

 ?>

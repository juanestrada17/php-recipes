<?php 

// Start session
session_start();

require_once 'helpers/system_helper.php';

// Config file 
require_once 'config/config.php';

// Autoload a template 
spl_autoload_register(function ($class_name) {
    require_once 'lib/' . $class_name . '.php';
});




// The require simulates this, but instead it uses the $class_name require_once('lib/templates.php'); 
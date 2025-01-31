<?php
// Get the requested route from the URL (default to "home")
$route = isset($_GET['route']) ? rtrim($_GET['route'], '/') : 'home';

// Define valid routes and their corresponding PHP files
$routes = [
    'home'        => 'home.php',
    'about'       => 'about.php',
    'commissions' => 'commissions.php',
    'music'       => 'music.php',
    'contact'     => 'contact.php'
];

// Include header and navigation
include 'header.php';
include 'nav.php';

// Serve the appropriate page if it exists
if (array_key_exists($route, $routes)) {
    include $routes[$route];
} else {
    http_response_code(404);
    include '404.php';
}

// Include footer
include 'footer.php';
?>
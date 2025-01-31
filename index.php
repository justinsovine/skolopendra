<?php
// Enable error logging for debugging (only enable in development)
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/logs/error.log'); // Log errors to logs/error.log
ini_set('display_errors', 0); // Hide errors from users

// Get the requested route from the URL (default to "home")
$route = isset($_GET['route']) ? rtrim($_GET['route'], '/') : 'home';

// Define valid routes and their corresponding PHP files
$routes = [
    'home'        => __DIR__ . '/home.php',
    'about'       => __DIR__ . '/about.php',
    'commissions' => __DIR__ . '/commissions.php',
    'music'       => __DIR__ . '/music.php',
    'contact'     => __DIR__ . '/contact.php'
];

// Include header and navigation
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/nav.php';

// // Serve the appropriate page if it exists
// if (array_key_exists($route, $routes) && file_exists($routes[$route])) {
//     require_once $routes[$route];
// } else {
//     // Log the error if the route doesn't exist
//     error_log("404 Not Found: " . htmlspecialchars($route));

//     // Set 404 response code
//     http_response_code(404);

//     // Show user-friendly error message
//     require_once __DIR__ . '/404.php';
// }

// Include footer
// require_once __DIR__ . '/footer.php';
?>
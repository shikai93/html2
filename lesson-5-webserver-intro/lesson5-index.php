<?php
include('lesson5-1-webserver.php');
$routes = array(
    '/name_submission' => 'handle_name_submission'
);
function router($routes) {
    // Iterate through a given list of routes.
    foreach ($routes as $path => $content) {
        if ($path == $_SERVER['PATH_INFO']) {
            // If the path matches, display its contents and stop the router.
            if (is_callable($content)) {
                echo $content();
            }
            return;
        }
    }
    // This can only be reached if none of the routes matched the path.
    echo 'Sorry! Page not found';
}
// Execute the router with our list of routes.
router($routes);
?>
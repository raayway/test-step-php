<?php
require_once 'model.php';
require_once 'controllers.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ("/index.php" === $uri || "/" === $uri) {
    list_action();
} else if ("/index.php/show/" === $uri && isset($_GET['id'])) {
    show_action($_GET['id']);
} else if ("/index.php/post/" === $uri) {
    add_action();
} else if ("index.php/post/create/" === $uri && isset($_POST['title'])) {
    create_post_action();
} 
else {
    header('Status: 404 Not Found');
    echo "<html><body><h1>Page Not Found $uri</h1></body></html>";
}
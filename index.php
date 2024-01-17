<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

// include 'user/db.php';

if (!isset($_SESSION))
    session_start();
// echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';


$ini_array = parse_ini_file("config.ini");
define('host',$ini_array["host"]);
define('user',$ini_array["user"]);
define('password',$ini_array["password"]);
define('db_name',$ini_array["db_name"]);
define('project_dir',$ini_array["project_dir"]);

$request = substr($_SERVER['REQUEST_URI'], strrpos($_SERVER['REQUEST_URI'], '/'));

$url = parse_url($_SERVER['REQUEST_URI']);
$path = explode('/', $url["path"]);




// print_r(__DIR__);

// print_r($_SERVER['REQUEST_URI'] . "\n");

if (strpos($request, '?')) {
    $request = substr($request, 0, strpos($request, '?'));
}

// print_r($request_root);

// print_r($path[count($path)-1]);

switch ($request) {
    case '':
    case '/':
    case '/home':
        require __DIR__ . '/user/view/common/home.php';
        break;
    case '/blog':
        require __DIR__ . '/user/view/common/blog.php';
        break;
    case '/about':
        require __DIR__ . '/user/view/common/about.php';
        break;
    case '/article':
        require __DIR__ . '/user/view/common/article.php';
        break;
    case '/create_account':
        require __DIR__ . '/user/view/common/create_account.php';
        break;
    case '/user_dashboard':
        require __DIR__ . '/user/view/user/dashboard.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/user/view/common/not_found.php';
        break;
}

?>
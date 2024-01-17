<?php
    session_start();

    // print_r($_SERVER['REQUEST_URI']);

    if ($_SESSION["type"] == 'admin') {
        $url = parse_url($_SERVER['REQUEST_URI']);

        $request = explode('/', $url["path"]);

        // print_r($request[count($path)-2]);

        // switch ($request) {
        //     case '':
        //     case '/':
        //     case '/articles':
        //         require __DIR__ . '/view/common/admin_page.php';
        //         // header('Location: view/common/admin_page.php');
        //         break;
        //     default:
        //     http_response_code(404);
        //     require __DIR__ . '/user/view/common/not_found.php'; # TODO: NOT FOUND PAGE
        //     break;
        // }
        header('Location: view/dashboard/admin_page.php');
    }
    else {
        echo 'You are not authorized to access this section of the page';
    }
?>
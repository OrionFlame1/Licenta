<?php 
    // echo 'hi';
    require_once realpath(__DIR__ . '/../model/blog/user_comment_upload.php');
    // require '../model/blog/user_comment_upload.php';
    $user_comment = array(
        "article_id" => $_POST["article_id"],
        "content" => $_POST["content"],
        "user_id" => $_POST["user_id"]
    );
    addComment($user_comment);
    // print_r($res);
    // exit();
    $ini = parse_ini_file("../../config.ini");
    // $path = explode('/', $_SERVER['DOCUMENT_ROOT']);

    header('Location: ' . $ini["project_dir"] . "/article?id=" . $_POST["article_id"]);
?>
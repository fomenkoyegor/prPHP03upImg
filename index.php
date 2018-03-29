<?php
define("DOCROOT", $_SERVER["DOCUMENT_ROOT"] . "/");
define("VIEWS_PATH", DOCROOT . "views/");

$page = @$_GET["page"];
$page = empty($page) ? "main" : $page;

$ROUTES = [
    "/" => ["ctrl" => "main", "action" => "index"],
    "/contacts" => ["ctrl" => "main", "action" => "contacts"],
    "/cat" => ["ctrl" => "cats", "action" => "index"],
    "/cat/show" => ["ctrl" => "cats", "action" => "show"],
    "/cat/fav" => ["ctrl" => "cats", "action" => "fav"],
    "/cats/add" => ["ctrl" => "cats", "action" => "add"],
    "/headers" => ["ctrl" => "main", "action" => "headers"],
    "/404" => ["ctrl" => "404", "action" => "index"]
];

function load_model($modelname){
    include DOCROOT."models/{$modelname}.php";
}

function rote($page)
{
    global $ROUTES;
    if (isset($ROUTES[$page])) {
        include DOCROOT . "controllers/" . $ROUTES[$page]["ctrl"] . ".php";
        call_user_func("action_".$ROUTES[$page]["action"]);
    } else {
        rote("404");
    }
}

function load_view($view,$params=[]){
    $file=VIEWS_PATH.$view.".php";
    extract($params);
    include DOCROOT . "tamplate.php";
}

$request_uri=explode("?",$_SERVER["REQUEST_URI"])[0];

rote($request_uri);



?>
<?php
function action_index()
{
    load_view("main");
}


function action_contacts()
{
    load_view("contact");
}

function action_headers()
{
    $id=@$_GET["id"];
    if($id===null) die(":(");
    load_model("cats");
    model_cats_addToFav($id);
    header("Location:".$_SERVER["HTTP_REFERER"]);
}
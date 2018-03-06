<?php

function _generate_filename(){
    return strftime("%d%m%y_%H%S".rand(1000000,9999999));
}

function _getExt($type){
    $type_com=explode("/",$type);
    return end($type_com);
}


function action_index()
{
    load_model("cats");

    load_view("galary",["cats"=>model_cats_getAll()]);
}


function action_show(){
//    $cats = include DOCROOT . "lib/cats.inc";
//    load_view("show",["cats"=>$cat,s]);
    load_model("cats");
    $cat=model_cats_getCatbyId($_GET["cat_id"]);
    load_view("show",[
        "src"=>$cat["url"],
        "name"=>$cat["name"]
    ]);

}

function action_add(){
    $tmp_name=@$_FILES["img"]["tmp_name"];
    $type=@$_FILES["img"]["type"];
    $name=@$_POST["name"];

    if(empty($type)|empty($tmp_name)|empty($name)){
        echo "data not valid";
        return;
    }

    $url="/media/images/"._generate_filename()."."._getExt($type);

    $path=DOCROOT."$url";

    if(!move_uploaded_file($tmp_name,$path)){
        echo "rerror";
        return;
    };

    load_model("cats");
    model_cats_appendCat($name,$url);

    $back=$_SERVER["HTTP_REFERER"];
    header("Location:".$back);
}
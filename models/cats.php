<?php
define("MODEL_CAT_FILE",DOCROOT."data/cats.json");

function _model_cats_saveArr($cats){
    file_put_contents(MODEL_CAT_FILE,json_encode($cats));
}

function _modle_cats_createCat($name,$url){
    return [
      "name"=>$name,
      "url"=>$url,
      "id"=>time().rand(1000000,9999999).rand(1000000,9999999)
    ];
}


function model_cats_getAll(){
   $cats=[];
   if(file_exists(MODEL_CAT_FILE)){
        $data=file_get_contents(MODEL_CAT_FILE);
        $cats=json_decode($data,true);

   }
    return $cats;
}

function model_cats_appendCat($name,$url){
    $cats=model_cats_getAll();
    $cats[]=_modle_cats_createCat($name,$url);
    _model_cats_saveArr($cats);
}

function model_cats_getCatbyId($id){
    $cats=model_cats_getAll();

    $cats=array_filter($cats,function ($elem) use($id){
        return $elem["id"]==$id;
    });
    $cats=array_values($cats);
    return @$cats[0];
}
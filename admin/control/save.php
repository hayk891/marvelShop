<?php
require("../../classes/marvelShop.php");


$data = $_POST;

if($data['table'] == 'saveShop'){
    if(!$data['name']){
        return false;
    }
    $res = marvelShop::add($data['name']);

    $result = new stdClass();

    $result->success = $res ? 1 : 0;

    echo json_encode($result);
    exit;
}



?>
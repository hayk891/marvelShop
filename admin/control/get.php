<?php
require("../../classes/marvelShop.php");
$data = $_POST;

if($data['table'] == 'getShopInfo'){
    if(!$data['id']){
        return false;
    }
    $res = marvelShop::getShopInfoById($data['id']);

    echo "<pre>"; print_r($res); echo "</pre>";
    die;


    $result = new stdClass();

    $result->success = $res ? 1 : 0;

    echo json_encode($result);
    exit;
}

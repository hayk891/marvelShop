<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 28-Aug-16
 * Time: 09:30 PM
 */

require ("db/Database.php");
class marvelShop {

    public static $table = "shops";

    public static function getAll(){
        $conn = new Database("marvelshop","root",'');
        
        $shops = $conn->select(self::$table);

        return $shops->result_array();
    }

    public static function add($name){
        $conn = new Database("marvelshop","root",'');

        return $conn->insert(self::$table, array('name'=>$name));
    }

    public static function getShopInfoById($id){
        $conn = new Database("marvelshop","root",'');

        $res  = $conn->select("shop_info",array('id_shop'=>$id));

        return $res->result_array();
    }
    
}
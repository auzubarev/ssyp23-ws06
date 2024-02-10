<?php

require_once(__DIR__ . '/../../../api.php');
require_once(__DIR__.'/../../../config.php');

$req = request();
if ($req['password'] == ADMIN_PASSWORD) {
    $query = "SELECT * FROM coupons WHERE 1 ORDER BY id";
    return response(["result"=>"ok", "items"=>dbRead($query)]);
} 
else {
    return response(["result"=>"wrong_password", "items"=>[]]);
}
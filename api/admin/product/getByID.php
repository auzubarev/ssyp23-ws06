<?php

require_once(__DIR__ . '/../../../api.php');
require_once(__DIR__.'/../../../config.php');

$req = request();

$query = "SELECT * FROM coupons WHERE id=:id";
return response(["result"=>"ok", "items"=>dbRead($query, ["id" => $req["id"]])]);
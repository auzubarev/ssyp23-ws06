<?php

require_once(__DIR__ . '/../../../api.php');
require_once(__DIR__.'/../../../config.php');

$req = request();

$query = "DELETE FROM coupons WHERE id = :id";
dbWrite($query, ["id" => $req["id"]]);
return response(["result"=>"ok"]);
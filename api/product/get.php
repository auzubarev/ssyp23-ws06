<?php

require_once(__DIR__ . '/../../api.php');
require_once(__DIR__.'/../../config.php');

$req = request();
$query = "SELECT * FROM products WHERE id=:id";
$data = dbRead($query, ["id" => $req['id']]);
if (!$data) {
    response(false);
} else {
    response(dbRead($query, [
    "id" => $req['id']])[0]);
}

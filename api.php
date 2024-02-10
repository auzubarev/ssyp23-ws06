<?php

require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/db.php');

function request() {
    return json_decode(file_get_contents('php://input'), true);
}

function response($arr) {
    echo json_encode($arr, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
}
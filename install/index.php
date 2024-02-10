<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once (__DIR__.'/001_coupon_table.php');
require_once (__DIR__.'/002_create_products_table.php');
require_once (__DIR__.'/003_order_table.php');

echo 'end';
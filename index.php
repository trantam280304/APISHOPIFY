<?php
$method = !empty($_GET['method']) ? $_GET['method'] : '';
switch ($method) {
    case 'new_coupon':
        require_once("api_call_write_coupons.php");
        break;
    case 'apply_coupon':
        require_once("api_call_write_checkout.php");
        break;
     case 'customer':
            require_once("api_call_wirte_customers.php");
            break;
    default:
        echo 'khong xu ly';
        break;
}

<?php

// Set variables for our request
$shop = 'nguyen-thi-hang28';
$api_key = "e3dc850611f9c4fd7fedef80766f6a67";
$scopes = "read_customers,write_customers,read_products,write_products,read_discounts,write_discounts,read_orders,write_orders,read_checkouts,write_checkouts,read_price_rules,write_price_rules";
$redirect_uri = "http://apishopify.test/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();
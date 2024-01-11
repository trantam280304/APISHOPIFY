<?php

// Set variables for our request
$shop = 'test-tran-tam-codegym';
$api_key = "15e7067c3cd24abcc0029d5c902af9f4";
$scopes = "read_products,write_products,read_discounts,write_discounts,read_orders,write_orders,read_checkouts,write_checkouts,read_price_rules,write_price_rules";
$redirect_uri = "http://apishopify.test/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();
<?php

// Set variables for our request
$shop = '52ca1e-3';
$api_key = "bf4978ac30a96d9829ef6a88caab8af7";
$scopes = "write_products,read_orders,read_themes,write_themes,read_price_rules,read_discounts,read_customers,write_discounts,read_price_rules,write_price_rules,read_checkouts,write_checkouts,read_customers,write_customers";
$redirect_uri = "http://apishopify.test/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();



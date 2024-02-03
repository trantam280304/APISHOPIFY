<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://hoingotennis.myshopify.com/admin/api/2024-01/products.json',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'X-Shopify-Access-Token: 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 ',
    'Cookie: _landing_page=%2Fchallenge; _orig_referrer=https%3A%2F%2Fhoingotennis.myshopify.com%2Faccount%2Flogin; _secure_session_id=72f9c9dc8dacdc3210e3d861e761d3d3; _shopify_y=5d41744a-6aae-4ba8-b1e5-33f6f404e17b; _tracking_consent=%7B%22lim%22%3A%5B%22CMP%22%5D%2C%22region%22%3A%22VNHN%22%2C%22reg%22%3A%22%22%2C%22v%22%3A%222.1%22%2C%22con%22%3A%7B%22CMP%22%3A%7B%22s%22%3A%22%22%2C%22m%22%3A%22%22%2C%22a%22%3A%22%22%2C%22p%22%3A%22%22%7D%7D%7D; localization=VN; secure_customer_sig='
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

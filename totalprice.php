<?php
// Thông tin cửa hàng Shopify
$shopDomain = '52ca1e-3.myshopify.com';
$accessToken = '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';
$apiVersion = '2024-01';

$url = "https://$shopDomain/admin/api/$apiVersion/checkouts.json";

$header = array(
    'Content-Type: application/json',
    'X-Shopify-Access-Token: ' . $accessToken
);

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $header,
));

$response = curl_exec($curl);
$http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);

if ($response !== false) {
    $responseData = json_decode($response, true);

    usort($responseData['checkouts'], function($a, $b) {
        return strtotime($b['created_at']) - strtotime($a['created_at']);
    });

    $latestCheckouts = array_slice($responseData['checkouts'], 0, 1); 

    echo "<pre>";
    print_r($latestCheckouts);
    echo "</pre>";
} else {
    echo 'Error occurred during API request.';
}
?>
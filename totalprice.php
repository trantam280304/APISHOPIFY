<?php
$checkoutToken = 'c1-4b7b1c40e0461e2bdc2746e5bec028f7'; // Thay đổi giá trị này bằng checkout_token của bạn
$shopifyApiUrl = 'https://hoingotennis.myshopify.com/admin/api/2024-01';

$url = $shopifyApiUrl . '/checkouts/' . $checkoutToken . '.json';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'X-Shopify-Access-Token: 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'
));

$response = curl_exec($ch);
curl_close($ch);

if ($response !== false) {
    $responseData = json_decode($response, true);
            var_dump($responseData);
            die();

    // Trích xuất total price từ phản hồi JSON
    if (isset($responseData['checkout']['total_price'])) {
        $totalPrice = $responseData['checkout']['total_price'];
        echo 'Total Price: ' . $totalPrice;
    } else {
        echo 'Total Price not found in API response.';
    }
} else {
    echo 'Error occurred during API request.';
}
?>

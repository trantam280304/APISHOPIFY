<?php
$token = "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";
$data = '
{
    "checkout":
    {
        "discount_code": "trantam280304",
        "line_items":
        [
            {
            "variant_id":47569370218781,
            "quantity":1
            }
        ]
    }
}
';
$url = 'https://0a2f8f.myshopify.com/admin/api/2024-01/checkouts.json';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'X-Shopify-Access-Token: ' . $token
));
$response = curl_exec($ch);
curl_close($ch);

$response = json_decode($response);

if (isset($response->checkout) && isset($response->checkout->web_url)) {
    $checkoutUrl = $response->checkout->web_url;

    // Redirect to the checkout page
    header("Location: $checkoutUrl");
    exit;
} else {
    // Handle error here
    echo "Error creating checkout.";
}
?>
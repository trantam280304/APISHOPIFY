    <?php
    $shopDomain = '52ca1e-3.myshopify.com';
    $accessToken = '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';
    $apiVersion = '2024-01';
    $url = "https://$shopDomain/admin/api/$apiVersion/checkouts.json";
    $header = array(
        'Content-Type: application/json',
        'X-Shopify-Access-Token: ' . $accessToken
    );
    $session = curl_init();
    curl_setopt($session, CURLOPT_URL, $url);
    curl_setopt($session, CURLOPT_HTTPHEADER, $header);
    curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($session, CURLOPT_FOLLOWLOCATION, true);

    $response = curl_exec($session);
    curl_close($session);

    if ($response !== false) {
        $responseData = json_decode($response, true);
        foreach ($responseData['checkouts'] as $checkout) {
            if ($checkout['cart_token'] === 'c1-ffa2564ce7d20fa1d5441042a4be8598') {
                echo 'Token Checkout: ' . $checkout['token'];
                break;
            }
        }
    } else {
        echo 'Error occurred during API request.';
    }

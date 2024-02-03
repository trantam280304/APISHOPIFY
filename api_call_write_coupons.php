<?php

$curl = curl_init();

$data = array(
    'price_rule' => array(
        'title' => 'Buy2iPodsGetiPodTouchForFree',
        'value_type' => 'percentage',
        'value' => '-100.0',
        'customer_selection' => 'all',
        'target_type' => 'line_item',
        'target_selection' => 'entitled',
        'allocation_method' => 'each',
        'starts_at' => '2024-01-30T00:00:00-00:00',
        'ends_at' => '2024-02-29T23:59:59-00:00',
        'prerequisite_to_entitlement_quantity_ratio' => array(
            'prerequisite_quantity' => 2,
            'entitled_quantity' => 1
        ),
        'entitled_product_ids' => array(
            7315159941182
        ),
        'allocation_limit' => 3
    )
);

$jsonData = json_encode($data);

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https:  //hoingotennis.myshopify.com/admin/api/2024-01/price_rules.json',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $jsonData,
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'X-Shopify-Access-Token: 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'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
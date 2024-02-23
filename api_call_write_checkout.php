<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://0a2f8f.myshopify.com/admin/api/2024-01/checkouts.json',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
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
}',
  CURLOPT_HTTPHEADER => array(
    'X-Shopify-Access-Token: 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',
    'X-Shopify-Storefront-Access-Token: df8b228cbc468bfd6151ea08c9c6681a',
    'Content-Type: application/json',
    'Cookie: _master_udr=eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaEpJaWsyTmpaa1l6ZGlNaTB5WkRKaExUUTFOV0l0T0RObVppMHpZVGd3TldWa05EQm1aV0lHT2daRlJnPT0iLCJleHAiOiIyMDI2LTAxLTI5VDA3OjA2OjA1LjEzMFoiLCJwdXIiOiJjb29raWUuX21hc3Rlcl91ZHIifX0%3D--0f0b9a0b31384895b4944b764082e6c30afbfcb3; _secure_admin_session_id=dbce013207a0808c01347d16c62d6350; _secure_admin_session_id_csrf=dbce013207a0808c01347d16c62d6350; localization=VN; secure_customer_sig='
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

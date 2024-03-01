<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://52ca1e-3.myshopify.com/admin/api/2024-01/checkouts.json',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "checkout": {
        "discount_code": "trantam280304",
        "line_items": [
            {
                "variant_id": 44402131206401,
                "quantity": 1
            }
        ]
    }
}',
  CURLOPT_HTTPHEADER => array(
    'X-Shopify-Access-Token: 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',
    'X-Shopify-Storefront-Access-Token: df8b228cbc468bfd6151ea08c9c6681a',
    'Content-Type: application/json',
    'Cookie: _cmp_a=%7B%22purposes%22%3A%7B%22a%22%3Atrue%2C%22p%22%3Atrue%2C%22m%22%3Atrue%2C%22t%22%3Atrue%7D%2C%22display_banner%22%3Afalse%2C%22sale_of_data_region%22%3Afalse%7D; _shopify_s=939406e7-5e3e-4c54-acfa-be3ec327b4cb; _shopify_y=bb08e7fa-0d0b-481d-ab66-46989ed298a0; _tracking_consent=%7B%22lim%22%3A%5B%22CMP%22%5D%2C%22region%22%3A%22VN54%22%2C%22reg%22%3A%22%22%2C%22v%22%3A%222.1%22%2C%22con%22%3A%7B%22CMP%22%3A%7B%22m%22%3A%22%22%2C%22a%22%3A%22%22%2C%22p%22%3A%22%22%2C%22s%22%3A%22%22%7D%7D%7D; checkout_session_lookup=%7B%22version%22%3A1%2C%22keys%22%3A%5B%7B%22source_id%22%3A%22c1-71b18ef139adf902191a37584cc6ab2b%22%2C%22checkout_session_identifier%22%3A%22cdfb3d593555c3c606012c1be5f46e90%22%2C%22source_type_abbrev%22%3A%22cn%22%2C%22updated_at%22%3A%222024-02-27T06%3A49%3A40.627Z%22%7D%5D%7D; checkout_session_token__cn__c1-71b18ef139adf902191a37584cc6ab2b=%7B%22token%22%3A%22cDVlTUtTUXI4ajM0anlmRHRYeFpFS0dkdFpzbGN5OW1JamtHMG1Ka2lmUFIwZU15aFFiMjBTd1hOMkFnN2NDNXpNOEUrNlJnTTlwOVRMcFluY0Yya1NJUllYQUwrcmdIL1JyME5LcGNVM080dXRyWGVLZ1Q5TGM1a1VFVUVZZ1BwVEZLMng2RlFTTFAwUW1lNUxCNGhGZzlxOFJsQlhVWWtxdkd1UlVxL2JRTGlLbi9QTWJIbFhqZ1ZnNmR0ZmM5NTJjR0UxdTJyTWttWDFQcmVWRHRCOW9SQUtobzN6N09XYlZFOUVzZkI0R1hqa3RJcEpldWV3UkxEQi90WFZldkhRMVdoVWJIaVh2YlBRPT0tLUgrZ3RBdlFOeGR0ZFZHMEctLTZTUS8vbTVocFNoSWZEUFVEUlZyQmc9PQ%22%2C%22locale%22%3A%22en%22%2C%22checkout_session_identifier%22%3A%22cdfb3d593555c3c606012c1be5f46e90%22%2C%22permanent_domain%22%3A%2252ca1e-3.myshopify.com%22%7D; localization=VN; secure_customer_sig='
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

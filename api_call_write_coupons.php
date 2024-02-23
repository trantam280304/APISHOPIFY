<?php

$price = -1; // Giá cần áp dụng phiếu giảm giá
$coupon_code = "trantam280304"; // Mã phiếu giảm giá một lần sử dụng

$token = "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";

// Tạo price rule
$priceRuleData = 
'{
  "price_rule": {
      "title": "Giảm giá",
      "value_type": "fixed_amount",
      "value": "'.$price.'",
      "customer_selection": "all",
      "target_type": "line_item",
      "target_selection": "all",
      "allocation_method": "across",
      "starts_at": "2024-01-30T00:00:00-00:00",
      "allocation_limit": 1,
      "code": "'.$coupon_code.'" // Mã phiếu giảm giá một lần sử dụng
  }
}';

$priceRuleUrl = 'https://0a2f8f.myshopify.com/admin/api/2024-01/price_rules.json';
$priceRuleCh = curl_init($priceRuleUrl);
curl_setopt($priceRuleCh, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($priceRuleCh, CURLOPT_POSTFIELDS, $priceRuleData);
curl_setopt($priceRuleCh, CURLOPT_RETURNTRANSFER, true);
curl_setopt($priceRuleCh, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'X-Shopify-Access-Token: ' . $token
));
$priceRuleResponse = curl_exec($priceRuleCh);
curl_close($priceRuleCh);

$priceRuleResponse = json_decode($priceRuleResponse);
$priceRuleId = $priceRuleResponse->price_rule->id;

// Tạo discount code
$discountCodeData = '
{
    "discount_code": {
        "code": "'.$coupon_code.'"
    }
}
';

$discountCodeUrl = 'https://0a2f8f.myshopify.com/admin/api/2024-01/price_rules/' . $priceRuleId . '/discount_codes.json';
$discountCodeCh = curl_init($discountCodeUrl);
curl_setopt($discountCodeCh, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($discountCodeCh, CURLOPT_POSTFIELDS, $discountCodeData);
curl_setopt($discountCodeCh, CURLOPT_RETURNTRANSFER, true);
curl_setopt($discountCodeCh, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'X-Shopify-Access-Token: ' . $token
));
$discountCodeResponse = curl_exec($discountCodeCh);
curl_close($discountCodeCh);

$discountCodeResponse = json_decode($discountCodeResponse);
echo '<pre>';
print_r($discountCodeResponse);
die();
?>

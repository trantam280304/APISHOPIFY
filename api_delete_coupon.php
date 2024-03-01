<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://0a2f8f.myshopify.com/admin/api/2024-01/price_rules/1425529831709.json',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'DELETE',
  CURLOPT_HTTPHEADER => array(
    'X-Shopify-Access-Token: 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',
    'Cookie: _master_udr=eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaEpJaWsyTmpaa1l6ZGlNaTB5WkRKaExUUTFOV0l0T0RObVppMHpZVGd3TldWa05EQm1aV0lHT2daRlJnPT0iLCJleHAiOiIyMDI2LTAxLTI5VDA3OjA2OjA1LjEzMFoiLCJwdXIiOiJjb29raWUuX21hc3Rlcl91ZHIifX0%3D--0f0b9a0b31384895b4944b764082e6c30afbfcb3; _secure_admin_session_id=dbce013207a0808c01347d16c62d6350; _secure_admin_session_id_csrf=dbce013207a0808c01347d16c62d6350; _cmp_a=%7B%22purposes%22%3A%7B%22a%22%3Atrue%2C%22p%22%3Atrue%2C%22m%22%3Atrue%2C%22t%22%3Atrue%7D%2C%22display_banner%22%3Afalse%2C%22sale_of_data_region%22%3Afalse%7D; _shopify_country=Vietnam; localization=VN; secure_customer_sig='
  ),
));

$response = curl_exec($curl);
$http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE); // Lấy mã trạng thái HTTP

curl_close($curl);

if ($http_status == 200 || $http_status == 204) {
  echo "Xóa thành công!";
} else {
  echo "Không thể xóa. Mã trạng thái HTTP: " . $http_status;
}

?>

<?php
// Thay đổi các giá trị sau bằng thông tin của cửa hàng Shopify của bạn
$shopDomain = '52ca1e-3.myshopify.com';  // Ví dụ: example.myshopify.com
$accessToken = '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';
$apiVersion = '2024-01';

// Tạo URL
$url = "https://$shopDomain/admin/api/$apiVersion/checkouts.json";

// Tạo tiêu đề
$header = array(
    'Content-Type: application/json',
    'X-Shopify-Access-Token: ' . $accessToken
);

// Khởi tạo session cURL
$session = curl_init();

// Cài đặt các tùy chọn cho session cURL
curl_setopt($session, CURLOPT_URL, $url);
curl_setopt($session, CURLOPT_HTTPHEADER, $header);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
curl_setopt($session, CURLOPT_FOLLOWLOCATION, true); // Theo dõi các chuyển hướng
curl_setopt($session, CURLOPT_MAXREDIRS, 10); // Số lượng tối đa các chuyển hướng được phép
curl_setopt($session, CURLOPT_TIMEOUT, 30); // Thời gian chờ tối đa (giây)

// Thực thi yêu cầu và lấy kết quả
$response = curl_exec($session);

// Đóng session cURL
curl_close($session);

// Kiểm tra và xử lý kết quả
if ($response !== false) {
    // Chuyển đổi JSON thành mảng PHP
    $responseData = json_decode($response, true);

    // Hiển thị dữ liệu theo cấu trúc phù hợp
    echo "<pre>";
    print_r($responseData);
    echo "</pre>";
} else {
    // Xử lý lỗi nếu có
    echo 'Error occurred during API request.';
}
?>

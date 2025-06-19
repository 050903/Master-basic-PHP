<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3: Kiểm Tra Điểm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
            color: #343a40;
            text-align: center;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            max-width: 500px;
            margin: 40px auto;
            text-align: center;
        }
        h2 {
            color: #007bff;
            margin-bottom: 25px;
        }
        p {
            font-size: 1.2em;
            margin-bottom: 15px;
        }
        .result {
            font-size: 1.8em;
            font-weight: bold;
            color: #28a745; /* Màu xanh lá cây cho kết quả tốt */
            margin-top: 25px;
            padding: 15px;
            border: 2px solid #28a745;
            border-radius: 8px;
            display: inline-block; /* Để border ôm sát nội dung */
        }
        .bad-result {
            color: #dc3545; /* Màu đỏ cho kết quả kém */
            border-color: #dc3545;
        }
        .good-result {
            color: #ffc107; /* Màu vàng cho kết quả khá */
            border-color: #ffc107;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kiểm Tra Điểm Học Sinh</h2>
        <?php
        // 1. Khai báo biến $diem
        $diem = 8; // Bạn có thể thay đổi giá trị này để kiểm tra các trường hợp khác

        echo "<p>Điểm của bạn là: <strong>{$diem}</strong></p>";
        echo "<hr>";

        // 2. Sử dụng cấu trúc điều kiện if-else if-else
        echo "<div class='result-section'>";
        if ($diem < 5) {
            echo "<p class='result bad-result'>Xem đậu</p>";
        } elseif ($diem >= 5 && $diem <= 8) { // Điều kiện điểm từ 5 đến 8
            echo "<p class='result good-result'>Đậu rồi</p>";
        } else { // $diem > 8
            echo "<p class='result'>Bé học giỏi quá nha!</p>";
        }
        echo "</div>";
        ?>
    </div>
</body>
</html>
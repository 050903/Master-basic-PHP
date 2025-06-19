<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 9: Tính Giai Thừa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f7f9fc; /* Nền xanh nhạt */
            color: #333;
            text-align: center;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
            max-width: 500px;
            margin: 40px auto;
            text-align: center;
        }
        h2 {
            color: #0056b3;
            margin-bottom: 25px;
        }
        p {
            font-size: 1.1em;
            margin-bottom: 15px;
        }
        .result {
            font-size: 1.8em;
            font-weight: bold;
            color: #dc3545; /* Màu đỏ nổi bật */
            margin-top: 20px;
            padding: 15px;
            background-color: #ffe0e0; /* Nền đỏ nhạt cho kết quả */
            border-radius: 8px;
            display: inline-block;
            border: 2px solid #dc3545;
        }
        .error {
            color: #ffc107; /* Màu cam cho lỗi */
            font-weight: bold;
            font-size: 1.2em;
        }
        .variable-display {
            font-weight: bold;
            color: #28a745; /* Màu xanh lá cây cho biến */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tính Giai Thừa</h2>
        <?php
        // Khai báo biến $n
        $n = 5; // Thay đổi giá trị này để tính giai thừa của các số khác

        echo "<p>Số cần tính giai thừa (\$n): <span class='variable-display'>{$n}</span></p>";
        echo "<hr>";

        $factorial = 1; // Khởi tạo giá trị giai thừa

        // Xử lý các trường hợp đặc biệt
        if ($n < 0) {
            echo "<p class='error'>Không thể tính giai thừa của số âm.</p>";
        } elseif ($n == 0) {
            echo "<p class='result'>{$n}! = 1</p>";
        } else {
            // Vòng lặp để tính giai thừa
            for ($i = 1; $i <= $n; $i++) {
                $factorial *= $i; // Tương đương với $factorial = $factorial * $i;
            }
            echo "<p class='result'>{$n}! = {$factorial}</p>";
        }
        ?>
    </div>
</body>
</html>
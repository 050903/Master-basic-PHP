<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2: Phép Toán Cơ Bản</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 20px auto;
        }
        h2 {
            color: #333;
            text-align: center;
        }
        p {
            font-size: 1.1em;
            line-height: 1.6;
        }
        strong {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Kết Quả Các Phép Toán</h2>
        <?php
        // Tạo các biến
        $a = 12;
        $b = 3;

        // In ra giá trị của biến
        echo "<p>Giá trị của \$a là: <strong>{$a}</strong></p>";
        echo "<p>Giá trị của \$b là: <strong>{$b}</strong></p>";
        echo "<hr>"; // Đường kẻ ngang để phân tách

        // Thực hiện và in ra kết quả của các phép toán
        echo "<p>Phép cộng (\$a + \$b): <strong>" . ($a + $b) . "</strong></p>";
        echo "<p>Phép trừ (\$a - \$b): <strong>" . ($a - $b) . "</strong></p>";
        echo "<p>Phép nhân (\$a * \$b): <strong>" . ($a * $b) . "</strong></p>";
        echo "<p>Phép chia (\$a / \$b): <strong>" . ($a / $b) . "</strong></p>";
        echo "<p>Phép chia lấy dư (\$a % \$b): <strong>" . ($a % $b) . "</strong></p>";
        ?>
    </div>
</body>
</html>
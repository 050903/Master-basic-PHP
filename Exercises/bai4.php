<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4: Số Chẵn Từ 10 đến 100</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f2f5;
            color: #333;
            text-align: center;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 40px auto;
            text-align: left;
        }
        h2 {
            color: #007bff;
            text-align: center;
            margin-bottom: 25px;
        }
        .numbers {
            font-size: 1.2em;
            line-height: 1.8;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 8px;
            border: 1px solid #dee2e6;
        }
        .number-item {
            display: inline-block;
            padding: 5px 10px;
            margin: 5px;
            background-color: #d1ecf1;
            border: 1px solid #bee5eb;
            border-radius: 5px;
            color: #0c5460;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Các Số Chẵn Từ 10 Đến 100</h2>
        <div class="numbers">
            <?php
            // Vòng lặp từ 10 đến 100
            for ($i = 10; $i <= 100; $i++) {
                // Kiểm tra xem số có phải là số chẵn không
                // Một số là số chẵn nếu nó chia hết cho 2 (phần dư bằng 0)
                if ($i % 2 == 0) {
                    // In ra số chẵn đó, kèm theo một khoảng trắng hoặc dấu phẩy
                    echo "<span class='number-item'>{$i}</span>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
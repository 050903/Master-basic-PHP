<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1: Bảng PHP</title>
    <style>
        /* CSS để canh giữa bảng */
        table {
            margin: 0 auto; /* Canh giữa theo chiều ngang */
            border-collapse: collapse; /* Gộp các đường viền bảng */
        }
        th, td {
            border: 1px solid black; /* Viền ô */
            padding: 10px; /* Khoảng cách nội dung và viền */
            text-align: center; /* Căn giữa nội dung ô */
        }
        .red-bg {
            background-color: red;
        }
        .yellow-bg {
            background-color: yellow;
        }
        .blue-bg {
            background-color: blue;
        }
    </style>
</head>
<body>

    <?php
    // Khai báo số hàng và cột
    $rows = 5;
    $cols = 3;
    $table_width = 500; // px

    echo "<table width='{$table_width}px'>"; // Bắt đầu bảng với chiều rộng

    for ($i = 1; $i <= $rows; $i++) {
        echo "<tr>"; // Bắt đầu một hàng
        for ($j = 1; $j <= $cols; $j++) {
            // Xác định class CSS cho các ô ở hàng 1
            $class = '';
            if ($i == 1) { // Chỉ áp dụng cho hàng 1
                if ($j == 1) {
                    $class = 'red-bg';
                } elseif ($j == 2) {
                    $class = 'yellow-bg';
                } elseif ($j == 3) {
                    $class = 'blue-bg';
                }
            }
            echo "<td class='{$class}'>Hàng {$i} - Ô {$j}</td>"; // Tạo ô
        }
        echo "</tr>"; // Kết thúc một hàng
    }

    echo "</table>"; // Kết thúc bảng
    ?>

</body>
</html>
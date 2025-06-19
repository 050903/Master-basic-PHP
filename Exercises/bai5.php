<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 5: Vẽ Bảng Động</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
            color: #333;
            text-align: center;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 40px auto;
            text-align: center;
        }
        h2 {
            color: #007bff;
            margin-bottom: 25px;
        }
        p {
            font-size: 1.1em;
            margin-bottom: 20px;
        }
        table {
            width: 80%; /* Chiều rộng bảng */
            border-collapse: collapse; /* Gộp các đường viền */
            margin: 0 auto; /* Canh giữa bảng */
        }
        th, td {
            border: 1px solid #ccc; /* Viền ô */
            padding: 12px; /* Khoảng cách nội dung và viền */
            text-align: center; /* Căn giữa nội dung ô */
        }
        th {
            background-color: #e9ecef;
            color: #495057;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; /* Tô màu xen kẽ hàng */
        }
        .variable-display {
            font-weight: bold;
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Vẽ Bảng Với Số Dòng Động</h2>
        <?php
        // Khai báo biến $a cho số dòng
        $a = 7; // Bạn có thể thay đổi giá trị này để tạo bảng với số dòng khác nhau
        $cols = 3; // Số cột (mặc định 3, bạn có thể thêm biến nếu muốn)

        echo "<p>Bảng này có <span class='variable-display'>{$a}</span> dòng và <span class='variable-display'>{$cols}</span> cột.</p>";

        echo "<table>"; // Bắt đầu bảng

        // Tạo hàng tiêu đề (optional, nhưng giúp bảng rõ ràng hơn)
        echo "<thead><tr>";
        for ($j = 1; $j <= $cols; $j++) {
            echo "<th>Cột {$j}</th>";
        }
        echo "</tr></thead>";

        echo "<tbody>";
        // Vòng lặp để tạo các hàng (rows) dựa trên giá trị của $a
        for ($i = 1; $i <= $a; $i++) {
            echo "<tr>"; // Bắt đầu một hàng mới
            // Vòng lặp để tạo các cột (cells) trong mỗi hàng
            for ($j = 1; $j <= $cols; $j++) {
                echo "<td>Hàng {$i} - Ô {$j}</td>"; // Tạo một ô
            }
            echo "</tr>"; // Kết thúc hàng
        }
        echo "</tbody>";
        echo "</table>"; // Kết thúc bảng
        ?>
    </div>
</body>
</html>
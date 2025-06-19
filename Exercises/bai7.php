<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 7: Bảng Động (Dòng và Cột)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #e6f7ff; /* Nền xanh nhạt */
            color: #333;
            text-align: center;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
            max-width: 800px; /* Chiều rộng lớn hơn cho bảng nhiều cột */
            margin: 40px auto;
            text-align: center;
        }
        h2 {
            color: #0056b3; /* Màu xanh đậm */
            margin-bottom: 25px;
        }
        p {
            font-size: 1.1em;
            margin-bottom: 20px;
        }
        table {
            width: 95%; /* Chiều rộng bảng */
            border-collapse: collapse; /* Gộp các đường viền */
            margin: 0 auto; /* Canh giữa bảng */
        }
        th, td {
            border: 1px solid #a6d9ff; /* Viền ô màu xanh */
            padding: 12px; /* Khoảng cách nội dung và viền */
            text-align: center; /* Căn giữa nội dung ô */
        }
        th {
            background-color: #b3e0ff; /* Nền tiêu đề xanh nhạt */
            color: #003366; /* Chữ tiêu đề xanh đậm */
        }
        tr:nth-child(even) {
            background-color: #e0f2ff; /* Tô màu xen kẽ hàng */
        }
        .variable-display {
            font-weight: bold;
            color: #cc0000; /* Màu đỏ nổi bật cho biến */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Vẽ Bảng Với Số Dòng và Số Cột Tùy Chỉnh</h2>
        <?php
        // Khai báo biến $dong cho số dòng và $cot cho số cột
        $dong = 6; // Thay đổi giá trị này để tạo bảng với số dòng khác nhau
        $cot = 5;  // Thay đổi giá trị này để tạo bảng với số cột khác nhau

        echo "<p>Bảng này có <span class='variable-display'>{$dong}</span> dòng và <span class='variable-display'>{$cot}</span> cột.</p>";

        echo "<table>"; // Bắt đầu bảng

        // Tạo hàng tiêu đề (Tùy chọn, nhưng giúp bảng rõ ràng hơn)
        echo "<thead><tr>";
        for ($j_header = 1; $j_header <= $cot; $j_header++) {
            echo "<th>Cột {$j_header}</th>";
        }
        echo "</tr></thead>";

        echo "<tbody>";
        // Vòng lặp ngoài để tạo các hàng (rows) dựa trên giá trị của $dong
        for ($i = 1; $i <= $dong; $i++) {
            echo "<tr>"; // Bắt đầu một hàng mới
            // Vòng lặp trong để tạo các cột (cells) trong mỗi hàng dựa trên giá trị của $cot
            for ($j = 1; $j <= $cot; $j++) {
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
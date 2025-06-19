<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 8: Đếm Số Chia Hết</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #eafaea; /* Nền xanh lá cây nhạt */
            color: #333;
            text-align: center;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
            max-width: 600px;
            margin: 40px auto;
            text-align: center;
        }
        h2 {
            color: #28a745; /* Màu xanh lá cây đậm */
            margin-bottom: 25px;
        }
        p {
            font-size: 1.2em;
            line-height: 1.6;
        }
        .result-count {
            font-size: 2em;
            font-weight: bold;
            color: #007bff; /* Màu xanh dương nổi bật */
            margin-top: 20px;
            padding: 15px;
            background-color: #e0f7fa; /* Nền xanh dương nhạt cho kết quả */
            border-radius: 8px;
            display: inline-block;
            border: 2px solid #007bff;
        }
        .range-info {
            font-style: italic;
            color: #666;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Đếm Số Chia Hết Cho 13</h2>
        <?php
        // Định nghĩa khoảng cần tìm
        $start = 2839;
        $end = 7827;
        $divisor = 13; // Số cần kiểm tra chia hết

        // Khởi tạo biến đếm
        $count = 0;

        // Optional: Tạo một mảng để lưu các số tìm được (nếu muốn hiển thị)
        // $found_numbers = [];

        // Vòng lặp duyệt qua từng số trong khoảng
        for ($i = $start; $i <= $end; $i++) {
            // Kiểm tra xem số hiện tại có chia hết cho $divisor hay không
            if ($i % $divisor == 0) {
                $count++; // Nếu chia hết, tăng biến đếm lên 1
                // array_push($found_numbers, $i); // Thêm số vào mảng (nếu dùng)
            }
        }

        echo "<p class='range-info'>Tìm các số chia hết cho {$divisor} trong khoảng từ {$start} đến {$end}.</p>";
        echo "<p>Tổng số các số chia hết cho {$divisor} là:</p>";
        echo "<div class='result-count'>{$count}</div>";

        // Optional: Hiển thị danh sách các số tìm được
        /*
        echo "<br><br><p>Các số đó là:</p>";
        echo "<div style='font-size: 1.1em; max-height: 200px; overflow-y: auto; border: 1px solid #ccc; padding: 10px;'>";
        echo implode(", ", $found_numbers);
        echo "</div>";
        */
        ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng PHP Nâng Cao - Tùy Chỉnh Động</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }
        
        .form-container {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 30px;
            border: 2px solid #e9ecef;
        }
        
        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }
        
        .form-group {
            flex: 1;
            min-width: 200px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #495057;
        }
        
        input, select {
            width: 100%;
            padding: 10px;
            border: 2px solid #ced4da;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        input:focus, select:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 3px rgba(0,123,255,0.25);
        }
        
        .btn {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(0,123,255,0.3);
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,123,255,0.4);
        }
        
        table {
            margin: 20px auto;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            background: white;
        }
        
        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #dee2e6;
            position: relative;
            transition: all 0.3s ease;
        }
        
        th {
            background: linear-gradient(45deg, #343a40, #495057);
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        td:hover {
            transform: scale(1.05);
            z-index: 10;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        
        /* Màu sắc động */
        .color-1 { background: linear-gradient(45deg, #ff6b6b, #ee5a52); color: white; }
        .color-2 { background: linear-gradient(45deg, #4ecdc4, #44a08d); color: white; }
        .color-3 { background: linear-gradient(45deg, #45b7d1, #96c93d); color: white; }
        .color-4 { background: linear-gradient(45deg, #f093fb, #f5576c); color: white; }
        .color-5 { background: linear-gradient(45deg, #4facfe, #00f2fe); color: white; }
        .color-6 { background: linear-gradient(45deg, #43e97b, #38f9d7); color: white; }
        .color-7 { background: linear-gradient(45deg, #fa709a, #fee140); color: white; }
        .color-8 { background: linear-gradient(45deg, #a8edea, #fed6e3); color: #333; }
        .color-9 { background: linear-gradient(45deg, #ff9a9e, #fecfef); color: #333; }
        .color-10 { background: linear-gradient(45deg, #667eea, #764ba2); color: white; }
        
        .pattern-diagonal { background-image: repeating-linear-gradient(45deg, transparent, transparent 10px, rgba(255,255,255,0.1) 10px, rgba(255,255,255,0.1) 20px); }
        .pattern-dots { background-image: radial-gradient(circle, rgba(255,255,255,0.2) 1px, transparent 1px); background-size: 10px 10px; }
        
        .stats {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
            flex-wrap: wrap;
        }
        
        .stat-item {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 15px 25px;
            border-radius: 10px;
            text-align: center;
            min-width: 150px;
            margin: 5px;
        }
        
        .stat-number {
            font-size: 2em;
            font-weight: bold;
            display: block;
        }
        
        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
            }
            
            table {
                font-size: 12px;
            }
            
            th, td {
                padding: 8px;
            }
            
            h1 {
                font-size: 1.8em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎨 Bảng PHP Nâng Cao - Tùy Chỉnh Động</h1>
        
        <div class="form-container">
            <form method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <label for="rows">Số hàng:</label>
                        <input type="number" id="rows" name="rows" min="1" max="20" value="<?php echo $_POST['rows'] ?? 5; ?>">
                    </div>
                    <div class="form-group">
                        <label for="cols">Số cột:</label>
                        <input type="number" id="cols" name="cols" min="1" max="15" value="<?php echo $_POST['cols'] ?? 5; ?>">
                    </div>
                    <div class="form-group">
                        <label for="color_mode">Chế độ màu:</label>
                        <select id="color_mode" name="color_mode">
                            <option value="gradient" <?php echo ($_POST['color_mode'] ?? '') == 'gradient' ? 'selected' : ''; ?>>Gradient</option>
                            <option value="rainbow" <?php echo ($_POST['color_mode'] ?? '') == 'rainbow' ? 'selected' : ''; ?>>Cầu vồng</option>
                            <option value="chess" <?php echo ($_POST['color_mode'] ?? '') == 'chess' ? 'selected' : ''; ?>>Bàn cờ</option>
                            <option value="random" <?php echo ($_POST['color_mode'] ?? '') == 'random' ? 'selected' : ''; ?>>Ngẫu nhiên</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="content_type">Nội dung hiển thị:</label>
                        <select id="content_type" name="content_type">
                            <option value="position" <?php echo ($_POST['content_type'] ?? '') == 'position' ? 'selected' : ''; ?>>Vị trí (Hàng-Cột)</option>
                            <option value="number" <?php echo ($_POST['content_type'] ?? '') == 'number' ? 'selected' : ''; ?>>Số thứ tự</option>
                            <option value="math" <?php echo ($_POST['content_type'] ?? '') == 'math' ? 'selected' : ''; ?>>Phép tính</option>
                            <option value="emoji" <?php echo ($_POST['content_type'] ?? '') == 'emoji' ? 'selected' : ''; ?>>Emoji</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="show_header">Hiển thị header:</label>
                        <select id="show_header" name="show_header">
                            <option value="1" <?php echo ($_POST['show_header'] ?? '1') == '1' ? 'selected' : ''; ?>>Có</option>
                            <option value="0" <?php echo ($_POST['show_header'] ?? '1') == '0' ? 'selected' : ''; ?>>Không</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn">🚀 Tạo Bảng</button>
                    </div>
                </div>
            </form>
        </div>

        <?php
        // Lấy dữ liệu từ form
        $rows = (int)($_POST['rows'] ?? 5);
        $cols = (int)($_POST['cols'] ?? 5);
        $color_mode = $_POST['color_mode'] ?? 'gradient';
        $content_type = $_POST['content_type'] ?? 'position';
        $show_header = (int)($_POST['show_header'] ?? 1);
        
        // Giới hạn an toàn
        $rows = max(1, min(20, $rows));
        $cols = max(1, min(15, $cols));
        
        // Mảng emoji
        $emojis = ['🎯', '🎨', '🚀', '⭐', '🎪', '🎭', '🎸', '🎺', '🎻', '🎹', '🎲', '🎳', '🏆', '🏅', '🎖️'];
        
        // Hàm tạo nội dung ô
        function getCellContent($i, $j, $type, $emojis) {
            switch($type) {
                case 'number':
                    return ($i - 1) * $GLOBALS['cols'] + $j;
                case 'math':
                    return $i . ' × ' . $j . ' = ' . ($i * $j);
                case 'emoji':
                    return $emojis[($i + $j) % count($emojis)];
                default:
                    return "H{$i}-C{$j}";
            }
        }
        
        // Hàm tạo class màu
        function getColorClass($i, $j, $mode, $rows, $cols) {
            switch($mode) {
                case 'rainbow':
                    return 'color-' . (($i + $j) % 10 + 1);
                case 'chess':
                    return ($i + $j) % 2 == 0 ? 'color-1' : 'color-8';
                case 'random':
                    return 'color-' . (rand(1, 10));
                default: // gradient
                    $index = (int)(($i / $rows) * 10) + 1;
                    return 'color-' . min(10, $index);
            }
        }
        
        echo "<div class='stats'>";
        echo "<div class='stat-item'><span class='stat-number'>{$rows}</span>Số hàng</div>";
        echo "<div class='stat-item'><span class='stat-number'>{$cols}</span>Số cột</div>";
        echo "<div class='stat-item'><span class='stat-number'>" . ($rows * $cols) . "</span>Tổng ô</div>";
        echo "<div class='stat-item'><span class='stat-number'>" . ucfirst($color_mode) . "</span>Chế độ màu</div>";
        echo "</div>";
        
        echo "<table>";
        
        // Tạo header nếu được yêu cầu
        if ($show_header) {
            echo "<thead><tr><th>STT</th>";
            for ($j = 1; $j <= $cols; $j++) {
                echo "<th>Cột {$j}</th>";
            }
            echo "</tr></thead>";
        }
        
        echo "<tbody>";
        for ($i = 1; $i <= $rows; $i++) {
            echo "<tr>";
            
            // Cột STT nếu có header
            if ($show_header) {
                echo "<th>Hàng {$i}</th>";
            }
            
            for ($j = 1; $j <= $cols; $j++) {
                $colorClass = getColorClass($i, $j, $color_mode, $rows, $cols);
                $content = getCellContent($i, $j, $content_type, $emojis);
                $pattern = rand(0, 2) == 0 ? 'pattern-diagonal' : (rand(0, 1) == 0 ? 'pattern-dots' : '');
                
                echo "<td class='{$colorClass} {$pattern}' title='Hàng {$i}, Cột {$j}'>{$content}</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
        ?>
        
        <div style="text-align: center; margin-top: 30px; color: #666;">
            <p>💡 <strong>Mẹo:</strong> Hover chuột lên các ô để xem hiệu ứng! Thử thay đổi các tùy chọn để tạo bảng độc đáo.</p>
        </div>
    </div>
</body>
</html>
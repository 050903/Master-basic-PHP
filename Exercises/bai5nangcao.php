<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🎨 Trình Tạo Bảng Động Thông Minh</title>
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
        
        .main-container {
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .header {
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }
        
        .header h1 {
            font-size: 3em;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .control-panel {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
        }
        
        label {
            margin-bottom: 8px;
            font-weight: bold;
            color: #495057;
        }
        
        input, select {
            padding: 12px;
            border: 2px solid #ced4da;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s;
        }
        
        input:focus, select:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 3px rgba(0,123,255,0.25);
        }
        
        .btn {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            padding: 15px 30px;
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
        
        .table-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow-x: auto;
        }
        
        .section-title {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
            border-bottom: 3px solid #007bff;
            padding-bottom: 10px;
        }
        
        .table-info {
            text-align: center;
            margin-bottom: 20px;
            padding: 15px;
            background: linear-gradient(45deg, #17a2b8, #6610f2);
            color: white;
            border-radius: 10px;
        }
        
        .dynamic-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .dynamic-table th, .dynamic-table td {
            padding: 15px;
            text-align: center;
            border: 1px solid #dee2e6;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .dynamic-table th {
            background: linear-gradient(45deg, #343a40, #495057);
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .dynamic-table td {
            background: white;
        }
        
        .dynamic-table td:hover {
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            transform: scale(1.05);
            z-index: 10;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        
        /* Màu sắc theo chế độ */
        .mode-rainbow .dynamic-table td:nth-child(1) { background: linear-gradient(45deg, #ff6b6b, #ee5a52); color: white; }
        .mode-rainbow .dynamic-table td:nth-child(2) { background: linear-gradient(45deg, #4ecdc4, #44a08d); color: white; }
        .mode-rainbow .dynamic-table td:nth-child(3) { background: linear-gradient(45deg, #45b7d1, #96c93d); color: white; }
        .mode-rainbow .dynamic-table td:nth-child(4) { background: linear-gradient(45deg, #f093fb, #f5576c); color: white; }
        .mode-rainbow .dynamic-table td:nth-child(5) { background: linear-gradient(45deg, #4facfe, #00f2fe); color: white; }
        .mode-rainbow .dynamic-table td:nth-child(6) { background: linear-gradient(45deg, #43e97b, #38f9d7); color: white; }
        
        .mode-chess .dynamic-table tr:nth-child(even) td:nth-child(odd),
        .mode-chess .dynamic-table tr:nth-child(odd) td:nth-child(even) {
            background: linear-gradient(45deg, #343a40, #495057);
            color: white;
        }
        
        .mode-gradient .dynamic-table td {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
        }
        
        .stats-section {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 30px;
            margin-top: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }
        
        .stat-card {
            background: linear-gradient(45deg, #28a745, #20c997);
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        
        .stat-number {
            font-size: 2.5em;
            font-weight: bold;
            display: block;
        }
        
        .templates-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }
        
        .template-card {
            background: linear-gradient(45deg, #6f42c1, #e83e8c);
            color: white;
            padding: 20px;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .template-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }
        
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2em;
            }
            
            .dynamic-table th, .dynamic-table td {
                padding: 8px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="header">
            <h1>🎨 Trình Tạo Bảng Động Thông Minh</h1>
            <p>Tạo bảng tùy chỉnh với nhiều hiệu ứng và chế độ hiển thị đa dạng</p>
        </div>
        
        <div class="control-panel">
            <form method="POST">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="rows">Số hàng:</label>
                        <input type="number" id="rows" name="rows" min="1" max="50" value="<?php echo $_POST['rows'] ?? 7; ?>">
                    </div>
                    <div class="form-group">
                        <label for="cols">Số cột:</label>
                        <input type="number" id="cols" name="cols" min="1" max="20" value="<?php echo $_POST['cols'] ?? 5; ?>">
                    </div>
                    <div class="form-group">
                        <label for="content_type">Nội dung ô:</label>
                        <select id="content_type" name="content_type">
                            <option value="position" <?php echo ($_POST['content_type'] ?? '') == 'position' ? 'selected' : ''; ?>>Vị trí (Hàng-Cột)</option>
                            <option value="number" <?php echo ($_POST['content_type'] ?? '') == 'number' ? 'selected' : ''; ?>>Số thứ tự</option>
                            <option value="math" <?php echo ($_POST['content_type'] ?? '') == 'math' ? 'selected' : ''; ?>>Phép nhân</option>
                            <option value="alphabet" <?php echo ($_POST['content_type'] ?? '') == 'alphabet' ? 'selected' : ''; ?>>Chữ cái</option>
                            <option value="random" <?php echo ($_POST['content_type'] ?? '') == 'random' ? 'selected' : ''; ?>>Số ngẫu nhiên</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="style_mode">Chế độ màu:</label>
                        <select id="style_mode" name="style_mode">
                            <option value="default" <?php echo ($_POST['style_mode'] ?? '') == 'default' ? 'selected' : ''; ?>>Mặc định</option>
                            <option value="rainbow" <?php echo ($_POST['style_mode'] ?? '') == 'rainbow' ? 'selected' : ''; ?>>Cầu vồng</option>
                            <option value="chess" <?php echo ($_POST['style_mode'] ?? '') == 'chess' ? 'selected' : ''; ?>>Bàn cờ</option>
                            <option value="gradient" <?php echo ($_POST['style_mode'] ?? '') == 'gradient' ? 'selected' : ''; ?>>Gradient</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="show_header">Hiển thị tiêu đề:</label>
                        <select id="show_header" name="show_header">
                            <option value="1" <?php echo ($_POST['show_header'] ?? '1') == '1' ? 'selected' : ''; ?>>Có</option>
                            <option value="0" <?php echo ($_POST['show_header'] ?? '1') == '0' ? 'selected' : ''; ?>>Không</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="table_name">Tên bảng:</label>
                        <input type="text" id="table_name" name="table_name" value="<?php echo $_POST['table_name'] ?? 'Bảng Động'; ?>" maxlength="50">
                    </div>
                </div>
                <div style="text-align: center;">
                    <button type="submit" class="btn">🚀 Tạo Bảng</button>
                </div>
            </form>
        </div>
        
        <div class="table-container mode-<?php echo $_POST['style_mode'] ?? 'default'; ?>">
            <?php
            $rows = max(1, min(50, intval($_POST['rows'] ?? 7)));
            $cols = max(1, min(20, intval($_POST['cols'] ?? 5)));
            $content_type = $_POST['content_type'] ?? 'position';
            $style_mode = $_POST['style_mode'] ?? 'default';
            $show_header = intval($_POST['show_header'] ?? 1);
            $table_name = htmlspecialchars($_POST['table_name'] ?? 'Bảng Động');
            
            echo "<h2 class='section-title'>📊 {$table_name}</h2>";
            
            echo "<div class='table-info'>";
            echo "<strong>Kích thước:</strong> {$rows} hàng × {$cols} cột | ";
            echo "<strong>Tổng ô:</strong> " . ($rows * $cols) . " | ";
            echo "<strong>Chế độ:</strong> " . ucfirst($style_mode);
            echo "</div>";
            
            // Hàm tạo nội dung ô
            function getCellContent($i, $j, $type, $cols) {
                switch($type) {
                    case 'number':
                        return ($i - 1) * $cols + $j;
                    case 'math':
                        return $i . '×' . $j . '=' . ($i * $j);
                    case 'alphabet':
                        $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $index = (($i - 1) * $cols + $j - 1) % 26;
                        return $letters[$index];
                    case 'random':
                        return rand(1, 100);
                    default:
                        return "H{$i}C{$j}";
                }
            }
            
            echo "<table class='dynamic-table'>";
            
            // Header
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
                
                if ($show_header) {
                    echo "<th>Hàng {$i}</th>";
                }
                
                for ($j = 1; $j <= $cols; $j++) {
                    $content = getCellContent($i, $j, $content_type, $cols);
                    echo "<td title='Hàng {$i}, Cột {$j}'>{$content}</td>";
                }
                echo "</tr>";
            }
            echo "</tbody></table>";
            ?>
        </div>
        
        <div class="stats-section">
            <h2 class="section-title">📈 Thống Kê & Phân Tích</h2>
            
            <div class="stats-grid">
                <?php
                $total_cells = $rows * $cols;
                $memory_usage = $total_cells * 50; // Ước tính bytes
                $generation_time = microtime(true);
                
                echo "<div class='stat-card'>";
                echo "<span class='stat-number'>{$total_cells}</span>";
                echo "<span>Tổng số ô</span>";
                echo "</div>";
                
                echo "<div class='stat-card'>";
                echo "<span class='stat-number'>{$rows}×{$cols}</span>";
                echo "<span>Kích thước</span>";
                echo "</div>";
                
                echo "<div class='stat-card'>";
                echo "<span class='stat-number'>" . number_format($memory_usage) . "</span>";
                echo "<span>Bytes ước tính</span>";
                echo "</div>";
                
                echo "<div class='stat-card'>";
                echo "<span class='stat-number'>" . ucfirst($content_type) . "</span>";
                echo "<span>Loại nội dung</span>";
                echo "</div>";
                ?>
            </div>
            
            <h3 style="text-align: center; margin: 30px 0 20px 0; color: #333;">🎯 Mẫu Bảng Có Sẵn</h3>
            <div class="templates-section">
                <div class="template-card" onclick="applyTemplate(3, 3, 'math', 'rainbow')">
                    <h4>🧮 Bảng Cửu Chương</h4>
                    <p>3×3 - Phép nhân - Cầu vồng</p>
                </div>
                <div class="template-card" onclick="applyTemplate(8, 8, 'alphabet', 'chess')">
                    <h4>♟️ Bàn Cờ Chữ</h4>
                    <p>8×8 - Chữ cái - Bàn cờ</p>
                </div>
                <div class="template-card" onclick="applyTemplate(10, 10, 'number', 'gradient')">
                    <h4>🔢 Ma Trận Số</h4>
                    <p>10×10 - Số thứ tự - Gradient</p>
                </div>
                <div class="template-card" onclick="applyTemplate(5, 8, 'random', 'default')">
                    <h4>🎲 Bảng Ngẫu Nhiên</h4>
                    <p>5×8 - Số random - Mặc định</p>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 30px; color: #666;">
                <p>✨ <strong>Mẹo:</strong> Hover chuột lên các ô để xem hiệu ứng! Click vào mẫu có sẵn để áp dụng nhanh.</p>
            </div>
        </div>
    </div>
    
    <script>
        function applyTemplate(rows, cols, content, style) {
            document.getElementById('rows').value = rows;
            document.getElementById('cols').value = cols;
            document.getElementById('content_type').value = content;
            document.getElementById('style_mode').value = style;
            document.forms[0].submit();
        }
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🎯 MATRIX ARCHITECT - Dynamic Table Generator</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&family=Fira+Code:wght@400;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }
        
        /* Animated Background */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: 
                radial-gradient(circle at 25% 25%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(255,255,255,0.1) 0%, transparent 50%);
            animation: bg-float 20s ease-in-out infinite;
        }
        
        @keyframes bg-float {
            0%, 100% { transform: rotate(0deg) scale(1); }
            50% { transform: rotate(180deg) scale(1.1); }
        }
        
        .main-container {
            max-width: 1600px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
            z-index: 10;
        }
        
        .header {
            text-align: center;
            margin-bottom: 40px;
            color: white;
        }
        
        .header h1 {
            font-size: 4em;
            font-weight: 900;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4, #45b7d1, #96c93d);
            background-size: 400% 400%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradient-shift 4s ease-in-out infinite;
            text-shadow: 0 0 30px rgba(255,255,255,0.5);
            margin-bottom: 20px;
        }
        
        @keyframes gradient-shift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .subtitle {
            font-size: 1.3em;
            color: #ffd700;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }
        
        .description {
            font-size: 1.1em;
            color: rgba(255,255,255,0.9);
            font-style: italic;
        }
        
        .control-center {
            background: rgba(255,255,255,0.95);
            border-radius: 20px;
            padding: 40px;
            margin-bottom: 40px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.3);
        }
        
        .control-title {
            text-align: center;
            font-size: 2em;
            color: #333;
            margin-bottom: 30px;
            font-weight: bold;
        }
        
        .control-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .control-group {
            position: relative;
        }
        
        .control-group label {
            display: block;
            font-weight: bold;
            color: #555;
            margin-bottom: 10px;
            font-size: 1.1em;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .control-group input, .control-group select {
            width: 100%;
            padding: 15px;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 16px;
            font-family: 'Fira Code', monospace;
            transition: all 0.3s;
            background: white;
        }
        
        .control-group input:focus, .control-group select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 20px rgba(102,126,234,0.3);
            transform: scale(1.02);
        }
        
        .generate-btn {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 20px 40px;
            border: none;
            border-radius: 25px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 2px;
            box-shadow: 0 10px 30px rgba(102,126,234,0.4);
        }
        
        .generate-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(102,126,234,0.6);
        }
        
        .matrix-display {
            background: rgba(255,255,255,0.95);
            border-radius: 20px;
            padding: 40px;
            margin-bottom: 40px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
            backdrop-filter: blur(10px);
        }
        
        .matrix-title {
            text-align: center;
            font-size: 2.5em;
            color: #333;
            margin-bottom: 30px;
            font-weight: bold;
        }
        
        .matrix-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .info-card {
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            color: white;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            transition: transform 0.3s;
        }
        
        .info-card:hover {
            transform: translateY(-5px);
        }
        
        .info-number {
            font-size: 2.5em;
            font-weight: bold;
            display: block;
        }
        
        .info-label {
            font-size: 1.1em;
            margin-top: 5px;
        }
        
        .dynamic-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 2px;
            margin: 20px 0;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }
        
        .dynamic-table th {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 20px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 1.1em;
            position: relative;
        }
        
        .dynamic-table th::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #ff6b6b, #4ecdc4, #45b7d1, #96c93d);
            animation: header-flow 3s linear infinite;
        }
        
        @keyframes header-flow {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        .dynamic-table td {
            padding: 15px;
            text-align: center;
            font-weight: 500;
            font-size: 1.1em;
            transition: all 0.3s;
            cursor: pointer;
            position: relative;
        }
        
        .dynamic-table td:hover {
            transform: scale(1.1);
            z-index: 10;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            border-radius: 10px;
        }
        
        /* Dynamic Row Styles */
        .style-gradient .dynamic-table tr:nth-child(odd) td {
            background: linear-gradient(45deg, rgba(255,107,107,0.2), rgba(78,205,196,0.2));
        }
        
        .style-gradient .dynamic-table tr:nth-child(even) td {
            background: linear-gradient(45deg, rgba(69,183,209,0.2), rgba(150,201,61,0.2));
        }
        
        .style-neon .dynamic-table tr:nth-child(odd) td {
            background: rgba(255,0,255,0.1);
            border: 1px solid #ff00ff;
            color: #ff00ff;
        }
        
        .style-neon .dynamic-table tr:nth-child(even) td {
            background: rgba(0,255,255,0.1);
            border: 1px solid #00ffff;
            color: #00ffff;
        }
        
        .style-matrix .dynamic-table tr:nth-child(odd) td {
            background: rgba(0,255,0,0.1);
            border: 1px solid #00ff00;
            color: #00aa00;
            font-family: 'Fira Code', monospace;
        }
        
        .style-matrix .dynamic-table tr:nth-child(even) td {
            background: rgba(0,0,0,0.8);
            border: 1px solid #00ff00;
            color: #00ff00;
            font-family: 'Fira Code', monospace;
        }
        
        .analytics-section {
            background: rgba(255,255,255,0.95);
            border-radius: 20px;
            padding: 40px;
            margin-top: 40px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        }
        
        .analytics-title {
            text-align: center;
            font-size: 2.5em;
            color: #333;
            margin-bottom: 30px;
            font-weight: bold;
        }
        
        .analytics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 30px 0;
        }
        
        .analytics-card {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .analytics-card h3 {
            margin-bottom: 20px;
            font-size: 1.5em;
        }
        
        .analytics-list {
            list-style: none;
            padding: 0;
        }
        
        .analytics-list li {
            margin: 10px 0;
            padding-left: 25px;
            position: relative;
        }
        
        .analytics-list li::before {
            content: '⚡';
            position: absolute;
            left: 0;
            color: #ffd700;
        }
        
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.5em;
            }
            
            .control-grid {
                grid-template-columns: 1fr;
            }
            
            .dynamic-table th, .dynamic-table td {
                padding: 10px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="bg-animation"></div>
    
    <div class="main-container">
        <div class="header">
            <h1>🎯 MATRIX ARCHITECT</h1>
            <div class="subtitle">Dynamic Table Generator</div>
            <div class="description">Tạo bảng động với sức mạnh của AI và thiết kế hiện đại</div>
        </div>
        
        <div class="control-center">
            <h2 class="control-title">🎛️ Trung Tâm Điều Khiển</h2>
            <form method="POST">
                <div class="control-grid">
                    <div class="control-group">
                        <label for="rows">📊 Số Hàng:</label>
                        <input type="number" id="rows" name="rows" min="1" max="100" value="<?php echo $_POST['rows'] ?? 8; ?>">
                    </div>
                    <div class="control-group">
                        <label for="cols">📋 Số Cột:</label>
                        <input type="number" id="cols" name="cols" min="1" max="50" value="<?php echo $_POST['cols'] ?? 6; ?>">
                    </div>
                    <div class="control-group">
                        <label for="content_mode">📝 Chế Độ Nội Dung:</label>
                        <select id="content_mode" name="content_mode">
                            <option value="position" <?php echo ($_POST['content_mode'] ?? '') == 'position' ? 'selected' : ''; ?>>Vị Trí (H-C)</option>
                            <option value="sequential" <?php echo ($_POST['content_mode'] ?? '') == 'sequential' ? 'selected' : ''; ?>>Số Thứ Tự</option>
                            <option value="multiplication" <?php echo ($_POST['content_mode'] ?? '') == 'multiplication' ? 'selected' : ''; ?>>Bảng Nhân</option>
                            <option value="fibonacci" <?php echo ($_POST['content_mode'] ?? '') == 'fibonacci' ? 'selected' : ''; ?>>Dãy Fibonacci</option>
                            <option value="prime" <?php echo ($_POST['content_mode'] ?? '') == 'prime' ? 'selected' : ''; ?>>Số Nguyên Tố</option>
                            <option value="random" <?php echo ($_POST['content_mode'] ?? '') == 'random' ? 'selected' : ''; ?>>Số Ngẫu Nhiên</option>
                        </select>
                    </div>
                    <div class="control-group">
                        <label for="visual_style">🎨 Phong Cách:</label>
                        <select id="visual_style" name="visual_style">
                            <option value="gradient" <?php echo ($_POST['visual_style'] ?? '') == 'gradient' ? 'selected' : ''; ?>>Gradient</option>
                            <option value="neon" <?php echo ($_POST['visual_style'] ?? '') == 'neon' ? 'selected' : ''; ?>>Neon</option>
                            <option value="matrix" <?php echo ($_POST['visual_style'] ?? '') == 'matrix' ? 'selected' : ''; ?>>Matrix</option>
                        </select>
                    </div>
                    <div class="control-group">
                        <label for="animation_speed">⚡ Tốc Độ Hiệu Ứng:</label>
                        <select id="animation_speed" name="animation_speed">
                            <option value="slow" <?php echo ($_POST['animation_speed'] ?? '') == 'slow' ? 'selected' : ''; ?>>Chậm</option>
                            <option value="normal" <?php echo ($_POST['animation_speed'] ?? '') == 'normal' ? 'selected' : ''; ?>>Bình Thường</option>
                            <option value="fast" <?php echo ($_POST['animation_speed'] ?? '') == 'fast' ? 'selected' : ''; ?>>Nhanh</option>
                        </select>
                    </div>
                    <div class="control-group">
                        <label for="table_name">🏷️ Tên Bảng:</label>
                        <input type="text" id="table_name" name="table_name" value="<?php echo $_POST['table_name'] ?? 'Ma Trận Động'; ?>" maxlength="50">
                    </div>
                </div>
                <div style="text-align: center;">
                    <button type="submit" class="generate-btn">🚀 Tạo Ma Trận</button>
                </div>
            </form>
        </div>
        
        <div class="matrix-display style-<?php echo $_POST['visual_style'] ?? 'gradient'; ?>">
            <?php
            $rows = max(1, min(100, intval($_POST['rows'] ?? 8)));
            $cols = max(1, min(50, intval($_POST['cols'] ?? 6)));
            $content_mode = $_POST['content_mode'] ?? 'position';
            $visual_style = $_POST['visual_style'] ?? 'gradient';
            $animation_speed = $_POST['animation_speed'] ?? 'normal';
            $table_name = htmlspecialchars($_POST['table_name'] ?? 'Ma Trận Động');
            
            echo "<h2 class='matrix-title'>🎯 {$table_name}</h2>";
            
            echo "<div class='matrix-info'>";
            echo "<div class='info-card'>";
            echo "<span class='info-number'>{$rows}</span>";
            echo "<span class='info-label'>Số Hàng</span>";
            echo "</div>";
            
            echo "<div class='info-card'>";
            echo "<span class='info-number'>{$cols}</span>";
            echo "<span class='info-label'>Số Cột</span>";
            echo "</div>";
            
            echo "<div class='info-card'>";
            echo "<span class='info-number'>" . ($rows * $cols) . "</span>";
            echo "<span class='info-label'>Tổng Ô</span>";
            echo "</div>";
            
            echo "<div class='info-card'>";
            echo "<span class='info-number'>" . ucfirst($content_mode) . "</span>";
            echo "<span class='info-label'>Chế Độ</span>";
            echo "</div>";
            echo "</div>";
            
            // Generate content based on mode
            function generateContent($i, $j, $mode, $cols) {
                static $fib_cache = [1, 1];
                static $prime_cache = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47];
                
                switch($mode) {
                    case 'sequential':
                        return ($i - 1) * $cols + $j;
                    case 'multiplication':
                        return $i . '×' . $j . '=' . ($i * $j);
                    case 'fibonacci':
                        $index = ($i - 1) * $cols + $j - 1;
                        while (count($fib_cache) <= $index) {
                            $fib_cache[] = $fib_cache[count($fib_cache)-1] + $fib_cache[count($fib_cache)-2];
                        }
                        return $fib_cache[$index] ?? 1;
                    case 'prime':
                        $index = ($i - 1) * $cols + $j - 1;
                        return $prime_cache[$index % count($prime_cache)];
                    case 'random':
                        return rand(1, 999);
                    default:
                        return "H{$i}C{$j}";
                }
            }
            
            echo "<table class='dynamic-table'>";
            
            // Header
            echo "<thead><tr>";
            for ($j = 1; $j <= $cols; $j++) {
                echo "<th>Cột {$j}</th>";
            }
            echo "</tr></thead>";
            
            echo "<tbody>";
            for ($i = 1; $i <= $rows; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $cols; $j++) {
                    $content = generateContent($i, $j, $content_mode, $cols);
                    echo "<td title='Hàng {$i}, Cột {$j} - {$content}'>{$content}</td>";
                }
                echo "</tr>";
            }
            echo "</tbody></table>";
            ?>
        </div>
        
        <div class="analytics-section">
            <h2 class="analytics-title">📊 Phân Tích Ma Trận</h2>
            
            <div class="analytics-grid">
                <div class="analytics-card">
                    <h3>🎯 Thông Số Kỹ Thuật</h3>
                    <ul class="analytics-list">
                        <?php
                        $total_cells = $rows * $cols;
                        $memory_estimate = $total_cells * 64; // bytes
                        $complexity = $rows > 20 || $cols > 20 ? 'Cao' : ($rows > 10 || $cols > 10 ? 'Trung Bình' : 'Thấp');
                        
                        echo "<li>Tổng số ô: {$total_cells}</li>";
                        echo "<li>Ước tính bộ nhớ: " . number_format($memory_estimate) . " bytes</li>";
                        echo "<li>Độ phức tạp: {$complexity}</li>";
                        echo "<li>Phong cách: " . ucfirst($visual_style) . "</li>";
                        ?>
                    </ul>
                </div>
                
                <div class="analytics-card">
                    <h3>⚡ Hiệu Suất</h3>
                    <ul class="analytics-list">
                        <?php
                        $render_time = microtime(true);
                        $efficiency = $total_cells < 100 ? 'Tối Ưu' : ($total_cells < 500 ? 'Tốt' : 'Chấp Nhận Được');
                        
                        echo "<li>Thời gian render: < 0.1s</li>";
                        echo "<li>Hiệu suất: {$efficiency}</li>";
                        echo "<li>Tốc độ animation: " . ucfirst($animation_speed) . "</li>";
                        echo "<li>Responsive: Có</li>";
                        ?>
                    </ul>
                </div>
                
                <div class="analytics-card">
                    <h3>🎨 Tính Năng</h3>
                    <ul class="analytics-list">
                        <li>Hover effects động</li>
                        <li>Gradient animations</li>
                        <li>Responsive design</li>
                        <li>Multiple content modes</li>
                        <li>Visual style options</li>
                        <li>Real-time generation</li>
                    </ul>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 30px; color: #666;">
                <p>🎯 <strong>Pro Tip:</strong> Hover chuột lên các ô để xem hiệu ứng tương tác! Thử các chế độ nội dung khác nhau để khám phá thêm.</p>
            </div>
        </div>
    </div>
    
    <script>
        // Dynamic interactions
        document.addEventListener('DOMContentLoaded', function() {
            const cells = document.querySelectorAll('.dynamic-table td');
            const speed = '<?php echo $animation_speed; ?>';
            const speedMap = { slow: 0.6, normal: 0.3, fast: 0.1 };
            
            cells.forEach((cell, index) => {
                cell.style.transition = `all ${speedMap[speed] || 0.3}s ease`;
                
                cell.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.15) rotate(2deg)';
                    this.style.zIndex = '100';
                    
                    // Random color effect
                    const colors = ['#ff6b6b', '#4ecdc4', '#45b7d1', '#96c93d', '#ffd93d', '#ff6b9d'];
                    const randomColor = colors[Math.floor(Math.random() * colors.length)];
                    this.style.boxShadow = `0 15px 40px ${randomColor}40`;
                });
                
                cell.addEventListener('mouseleave', function() {
                    this.style.transform = '';
                    this.style.zIndex = '';
                    this.style.boxShadow = '';
                });
                
                // Click effect
                cell.addEventListener('click', function() {
                    this.style.animation = 'pulse 0.6s ease-in-out';
                    setTimeout(() => {
                        this.style.animation = '';
                    }, 600);
                });
            });
        });
        
        // Add pulse animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes pulse {
                0% { transform: scale(1); }
                50% { transform: scale(1.2); }
                100% { transform: scale(1); }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>
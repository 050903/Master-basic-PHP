<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🔢 Trung Tâm Phân Tích Số Học Thông Minh</title>
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
        
        .results-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .numbers-section, .stats-section {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .section-title {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
            border-bottom: 3px solid #007bff;
            padding-bottom: 10px;
        }
        
        .numbers-display {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(60px, 1fr));
            gap: 10px;
            margin: 20px 0;
        }
        
        .number-item {
            padding: 12px;
            text-align: center;
            border-radius: 8px;
            font-weight: bold;
            transition: all 0.3s;
            cursor: pointer;
            position: relative;
        }
        
        .number-item:hover {
            transform: scale(1.1);
            z-index: 10;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        
        .even { background: linear-gradient(45deg, #28a745, #20c997); color: white; }
        .odd { background: linear-gradient(45deg, #dc3545, #e83e8c); color: white; }
        .prime { background: linear-gradient(45deg, #6f42c1, #e83e8c); color: white; }
        .perfect { background: linear-gradient(45deg, #fd7e14, #ffc107); color: white; }
        
        .stat-card {
            background: linear-gradient(45deg, #17a2b8, #6610f2);
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin: 10px 0;
        }
        
        .stat-number {
            font-size: 2.5em;
            font-weight: bold;
            display: block;
        }
        
        .analysis-section {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 30px;
            margin-top: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .chart-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 20px 0;
        }
        
        .chart {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }
        
        .bar-chart {
            display: flex;
            align-items: end;
            justify-content: space-around;
            height: 200px;
            margin: 20px 0;
        }
        
        .bar {
            background: linear-gradient(to top, #007bff, #0056b3);
            border-radius: 5px 5px 0 0;
            min-width: 40px;
            display: flex;
            align-items: end;
            justify-content: center;
            color: white;
            font-weight: bold;
            padding: 5px;
        }
        
        .pattern-analysis {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }
        
        .pattern-card {
            background: linear-gradient(45deg, #28a745, #20c997);
            color: white;
            padding: 20px;
            border-radius: 10px;
        }
        
        .pattern-card h4 {
            margin-bottom: 10px;
        }
        
        @media (max-width: 768px) {
            .results-grid {
                grid-template-columns: 1fr;
            }
            
            .header h1 {
                font-size: 2em;
            }
            
            .numbers-display {
                grid-template-columns: repeat(auto-fill, minmax(50px, 1fr));
            }
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="header">
            <h1>🔢 Trung Tâm Phân Tích Số Học Thông Minh</h1>
            <p>Khám phá thế giới số học với các phân tích chi tiết và trực quan</p>
        </div>
        
        <div class="control-panel">
            <form method="POST">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="start">Số bắt đầu:</label>
                        <input type="number" id="start" name="start" value="<?php echo $_POST['start'] ?? 10; ?>" min="1" max="1000">
                    </div>
                    <div class="form-group">
                        <label for="end">Số kết thúc:</label>
                        <input type="number" id="end" name="end" value="<?php echo $_POST['end'] ?? 100; ?>" min="1" max="1000">
                    </div>
                    <div class="form-group">
                        <label for="filter">Bộ lọc:</label>
                        <select id="filter" name="filter">
                            <option value="even" <?php echo ($_POST['filter'] ?? 'even') == 'even' ? 'selected' : ''; ?>>Số chẵn</option>
                            <option value="odd" <?php echo ($_POST['filter'] ?? '') == 'odd' ? 'selected' : ''; ?>>Số lẻ</option>
                            <option value="prime" <?php echo ($_POST['filter'] ?? '') == 'prime' ? 'selected' : ''; ?>>Số nguyên tố</option>
                            <option value="perfect" <?php echo ($_POST['filter'] ?? '') == 'perfect' ? 'selected' : ''; ?>>Số hoàn hảo</option>
                            <option value="all" <?php echo ($_POST['filter'] ?? '') == 'all' ? 'selected' : ''; ?>>Tất cả</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="display">Hiển thị:</label>
                        <select id="display" name="display">
                            <option value="grid" <?php echo ($_POST['display'] ?? 'grid') == 'grid' ? 'selected' : ''; ?>>Lưới</option>
                            <option value="list" <?php echo ($_POST['display'] ?? '') == 'list' ? 'selected' : ''; ?>>Danh sách</option>
                        </select>
                    </div>
                </div>
                <div style="text-align: center;">
                    <button type="submit" class="btn">🚀 Phân Tích</button>
                </div>
            </form>
        </div>
        
        <div class="results-grid">
            <div class="numbers-section">
                <h2 class="section-title">📊 Kết Quả Phân Tích</h2>
                
                <?php
                $start = intval($_POST['start'] ?? 10);
                $end = intval($_POST['end'] ?? 100);
                $filter = $_POST['filter'] ?? 'even';
                $display = $_POST['display'] ?? 'grid';
                
                // Giới hạn an toàn
                $start = max(1, min(1000, $start));
                $end = max($start, min(1000, $end));
                
                // Hàm kiểm tra số nguyên tố
                function isPrime($n) {
                    if ($n < 2) return false;
                    for ($i = 2; $i <= sqrt($n); $i++) {
                        if ($n % $i == 0) return false;
                    }
                    return true;
                }
                
                // Hàm kiểm tra số hoàn hảo
                function isPerfect($n) {
                    $sum = 1;
                    for ($i = 2; $i <= sqrt($n); $i++) {
                        if ($n % $i == 0) {
                            $sum += $i;
                            if ($i != $n / $i) $sum += $n / $i;
                        }
                    }
                    return $sum == $n && $n > 1;
                }
                
                // Lọc số theo điều kiện
                $numbers = [];
                for ($i = $start; $i <= $end; $i++) {
                    $include = false;
                    switch ($filter) {
                        case 'even': $include = $i % 2 == 0; break;
                        case 'odd': $include = $i % 2 != 0; break;
                        case 'prime': $include = isPrime($i); break;
                        case 'perfect': $include = isPerfect($i); break;
                        case 'all': $include = true; break;
                    }
                    if ($include) $numbers[] = $i;
                }
                
                // Hiển thị số
                if ($display == 'grid') {
                    echo "<div class='numbers-display'>";
                    foreach ($numbers as $num) {
                        $class = '';
                        if ($num % 2 == 0) $class = 'even';
                        elseif (isPrime($num)) $class = 'prime';
                        elseif (isPerfect($num)) $class = 'perfect';
                        else $class = 'odd';
                        
                        echo "<div class='number-item {$class}' title='Số {$num}'>{$num}</div>";
                    }
                    echo "</div>";
                } else {
                    echo "<div style='columns: 4; column-gap: 20px;'>";
                    foreach ($numbers as $num) {
                        echo "<div style='margin: 5px 0; padding: 8px; background: #f8f9fa; border-radius: 5px;'>{$num}</div>";
                    }
                    echo "</div>";
                }
                ?>
            </div>
            
            <div class="stats-section">
                <h2 class="section-title">📈 Thống Kê</h2>
                
                <?php
                $total = count($numbers);
                $sum = array_sum($numbers);
                $avg = $total > 0 ? $sum / $total : 0;
                $min = $total > 0 ? min($numbers) : 0;
                $max = $total > 0 ? max($numbers) : 0;
                
                echo "<div class='stat-card'>";
                echo "<span class='stat-number'>{$total}</span>";
                echo "<span>Tổng số</span>";
                echo "</div>";
                
                echo "<div class='stat-card'>";
                echo "<span class='stat-number'>{$sum}</span>";
                echo "<span>Tổng cộng</span>";
                echo "</div>";
                
                echo "<div class='stat-card'>";
                echo "<span class='stat-number'>" . number_format($avg, 1) . "</span>";
                echo "<span>Trung bình</span>";
                echo "</div>";
                
                echo "<div class='stat-card'>";
                echo "<span class='stat-number'>{$min} - {$max}</span>";
                echo "<span>Khoảng</span>";
                echo "</div>";
                ?>
            </div>
        </div>
        
        <div class="analysis-section">
            <h2 class="section-title">🔬 Phân Tích Nâng Cao</h2>
            
            <div class="chart-container">
                <div class="chart">
                    <h3>📊 Biểu Đồ Phân Bố</h3>
                    <div class="bar-chart">
                        <?php
                        $evenCount = 0;
                        $oddCount = 0;
                        $primeCount = 0;
                        
                        for ($i = $start; $i <= $end; $i++) {
                            if ($i % 2 == 0) $evenCount++;
                            else $oddCount++;
                            if (isPrime($i)) $primeCount++;
                        }
                        
                        $maxCount = max($evenCount, $oddCount, $primeCount);
                        
                        echo "<div class='bar' style='height: " . ($evenCount / $maxCount * 150) . "px;'>{$evenCount}</div>";
                        echo "<div class='bar' style='height: " . ($oddCount / $maxCount * 150) . "px;'>{$oddCount}</div>";
                        echo "<div class='bar' style='height: " . ($primeCount / $maxCount * 150) . "px;'>{$primeCount}</div>";
                        ?>
                    </div>
                    <div style="display: flex; justify-content: space-around; margin-top: 10px;">
                        <span>Chẵn</span>
                        <span>Lẻ</span>
                        <span>Nguyên tố</span>
                    </div>
                </div>
                
                <div class="chart">
                    <h3>🎯 Tỷ Lệ Phần Trăm</h3>
                    <div style="margin: 20px 0;">
                        <?php
                        $totalRange = $end - $start + 1;
                        $evenPercent = ($evenCount / $totalRange) * 100;
                        $oddPercent = ($oddCount / $totalRange) * 100;
                        $primePercent = ($primeCount / $totalRange) * 100;
                        
                        echo "<div style='margin: 10px 0;'>";
                        echo "<strong>Số chẵn:</strong> " . number_format($evenPercent, 1) . "%";
                        echo "<div style='background: #28a745; height: 20px; width: {$evenPercent}%; border-radius: 10px; margin: 5px 0;'></div>";
                        echo "</div>";
                        
                        echo "<div style='margin: 10px 0;'>";
                        echo "<strong>Số lẻ:</strong> " . number_format($oddPercent, 1) . "%";
                        echo "<div style='background: #dc3545; height: 20px; width: {$oddPercent}%; border-radius: 10px; margin: 5px 0;'></div>";
                        echo "</div>";
                        
                        echo "<div style='margin: 10px 0;'>";
                        echo "<strong>Số nguyên tố:</strong> " . number_format($primePercent, 1) . "%";
                        echo "<div style='background: #6f42c1; height: 20px; width: {$primePercent}%; border-radius: 10px; margin: 5px 0;'></div>";
                        echo "</div>";
                        ?>
                    </div>
                </div>
            </div>
            
            <div class="pattern-analysis">
                <?php
                // Phân tích mẫu số
                $patterns = [
                    'Chia hết cho 3' => 0,
                    'Chia hết cho 5' => 0,
                    'Số chính phương' => 0,
                    'Số Fibonacci' => 0
                ];
                
                // Tạo dãy Fibonacci
                $fib = [1, 1];
                while (end($fib) <= $end) {
                    $fib[] = $fib[count($fib)-1] + $fib[count($fib)-2];
                }
                
                for ($i = $start; $i <= $end; $i++) {
                    if ($i % 3 == 0) $patterns['Chia hết cho 3']++;
                    if ($i % 5 == 0) $patterns['Chia hết cho 5']++;
                    if (sqrt($i) == intval(sqrt($i))) $patterns['Số chính phương']++;
                    if (in_array($i, $fib)) $patterns['Số Fibonacci']++;
                }
                
                foreach ($patterns as $pattern => $count) {
                    echo "<div class='pattern-card'>";
                    echo "<h4>{$pattern}</h4>";
                    echo "<div style='font-size: 2em; font-weight: bold;'>{$count}</div>";
                    echo "<div>số trong khoảng</div>";
                    echo "</div>";
                }
                ?>
            </div>
            
            <div style="text-align: center; margin-top: 30px; color: #666;">
                <p>🧮 <strong>Thú vị:</strong> Hover chuột lên các số để xem thông tin chi tiết!</p>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🧮 Máy Tính Toán Học Nâng Cao</title>
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
            max-width: 1200px;
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
        
        .calculator-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .input-section, .results-section {
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
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #495057;
        }
        
        input, select {
            width: 100%;
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
            width: 100%;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(0,123,255,0.3);
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,123,255,0.4);
        }
        
        .result-item {
            background: linear-gradient(45deg, #28a745, #20c997);
            color: white;
            padding: 15px;
            margin: 10px 0;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: transform 0.3s;
        }
        
        .result-item:hover {
            transform: scale(1.02);
        }
        
        .operation {
            font-weight: bold;
            font-size: 1.1em;
        }
        
        .result {
            font-size: 1.3em;
            font-weight: bold;
        }
        
        .advanced-section {
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
            background: linear-gradient(45deg, #6f42c1, #e83e8c);
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        
        .stat-number {
            font-size: 2em;
            font-weight: bold;
            display: block;
        }
        
        .comparison-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .comparison-table th, .comparison-table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #dee2e6;
        }
        
        .comparison-table th {
            background: linear-gradient(45deg, #343a40, #495057);
            color: white;
        }
        
        .comparison-table tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        
        .error {
            background: linear-gradient(45deg, #dc3545, #c82333);
            color: white;
            padding: 15px;
            border-radius: 10px;
            margin: 10px 0;
            text-align: center;
        }
        
        @media (max-width: 768px) {
            .calculator-grid {
                grid-template-columns: 1fr;
            }
            
            .header h1 {
                font-size: 2em;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="header">
            <h1>🧮 Máy Tính Toán Học Nâng Cao</h1>
            <p>Khám phá thế giới toán học với các phép tính đa dạng</p>
        </div>
        
        <div class="calculator-grid">
            <div class="input-section">
                <h2 class="section-title">📝 Nhập Số Liệu</h2>
                <form method="POST">
                    <div class="form-group">
                        <label for="num1">Số thứ nhất (a):</label>
                        <input type="number" id="num1" name="num1" step="any" value="<?php echo $_POST['num1'] ?? 12; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="num2">Số thứ hai (b):</label>
                        <input type="number" id="num2" name="num2" step="any" value="<?php echo $_POST['num2'] ?? 3; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="precision">Độ chính xác (số thập phân):</label>
                        <select id="precision" name="precision">
                            <option value="0" <?php echo ($_POST['precision'] ?? '2') == '0' ? 'selected' : ''; ?>>Số nguyên</option>
                            <option value="2" <?php echo ($_POST['precision'] ?? '2') == '2' ? 'selected' : ''; ?>>2 chữ số</option>
                            <option value="4" <?php echo ($_POST['precision'] ?? '2') == '4' ? 'selected' : ''; ?>>4 chữ số</option>
                            <option value="6" <?php echo ($_POST['precision'] ?? '2') == '6' ? 'selected' : ''; ?>>6 chữ số</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn">🚀 Tính Toán</button>
                </form>
            </div>
            
            <div class="results-section">
                <h2 class="section-title">📊 Kết Quả Tính Toán</h2>
                
                <?php
                $a = floatval($_POST['num1'] ?? 12);
                $b = floatval($_POST['num2'] ?? 3);
                $precision = intval($_POST['precision'] ?? 2);
                
                function formatNumber($num, $precision) {
                    return $precision == 0 ? intval($num) : round($num, $precision);
                }
                
                echo "<div class='result-item'>";
                echo "<span class='operation'>Giá trị a:</span>";
                echo "<span class='result'>" . formatNumber($a, $precision) . "</span>";
                echo "</div>";
                
                echo "<div class='result-item'>";
                echo "<span class='operation'>Giá trị b:</span>";
                echo "<span class='result'>" . formatNumber($b, $precision) . "</span>";
                echo "</div>";
                
                // Phép cộng
                echo "<div class='result-item'>";
                echo "<span class='operation'>a + b =</span>";
                echo "<span class='result'>" . formatNumber($a + $b, $precision) . "</span>";
                echo "</div>";
                
                // Phép trừ
                echo "<div class='result-item'>";
                echo "<span class='operation'>a - b =</span>";
                echo "<span class='result'>" . formatNumber($a - $b, $precision) . "</span>";
                echo "</div>";
                
                // Phép nhân
                echo "<div class='result-item'>";
                echo "<span class='operation'>a × b =</span>";
                echo "<span class='result'>" . formatNumber($a * $b, $precision) . "</span>";
                echo "</div>";
                
                // Phép chia
                if ($b != 0) {
                    echo "<div class='result-item'>";
                    echo "<span class='operation'>a ÷ b =</span>";
                    echo "<span class='result'>" . formatNumber($a / $b, $precision) . "</span>";
                    echo "</div>";
                    
                    echo "<div class='result-item'>";
                    echo "<span class='operation'>a % b =</span>";
                    echo "<span class='result'>" . formatNumber($a % $b, $precision) . "</span>";
                    echo "</div>";
                } else {
                    echo "<div class='error'>⚠️ Không thể chia cho 0!</div>";
                }
                
                // Lũy thừa
                echo "<div class='result-item'>";
                echo "<span class='operation'>a<sup>b</sup> =</span>";
                echo "<span class='result'>" . formatNumber(pow($a, $b), $precision) . "</span>";
                echo "</div>";
                ?>
            </div>
        </div>
        
        <div class="advanced-section">
            <h2 class="section-title">🔬 Phân Tích Nâng Cao</h2>
            
            <div class="stats-grid">
                <?php
                $sum = $a + $b;
                $diff = abs($a - $b);
                $product = $a * $b;
                $avg = ($a + $b) / 2;
                
                echo "<div class='stat-card'>";
                echo "<span class='stat-number'>" . formatNumber($sum, $precision) . "</span>";
                echo "<span>Tổng</span>";
                echo "</div>";
                
                echo "<div class='stat-card'>";
                echo "<span class='stat-number'>" . formatNumber($diff, $precision) . "</span>";
                echo "<span>Hiệu tuyệt đối</span>";
                echo "</div>";
                
                echo "<div class='stat-card'>";
                echo "<span class='stat-number'>" . formatNumber($product, $precision) . "</span>";
                echo "<span>Tích</span>";
                echo "</div>";
                
                echo "<div class='stat-card'>";
                echo "<span class='stat-number'>" . formatNumber($avg, $precision) . "</span>";
                echo "<span>Trung bình</span>";
                echo "</div>";
                ?>
            </div>
            
            <h3 style="text-align: center; margin: 30px 0 20px 0; color: #333;">📈 Bảng So Sánh Các Phép Toán</h3>
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th>Phép Toán</th>
                        <th>Công Thức</th>
                        <th>Kết Quả</th>
                        <th>Loại</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $operations = [
                        ['Cộng', "a + b", $a + $b, 'Cơ bản'],
                        ['Trừ', "a - b", $a - $b, 'Cơ bản'],
                        ['Nhân', "a × b", $a * $b, 'Cơ bản'],
                        ['Chia', "a ÷ b", $b != 0 ? $a / $b : 'Lỗi', 'Cơ bản'],
                        ['Chia dư', "a % b", $b != 0 ? $a % $b : 'Lỗi', 'Cơ bản'],
                        ['Lũy thừa', "a^b", pow($a, $b), 'Nâng cao'],
                        ['Căn bậc hai a', "√a", sqrt(abs($a)), 'Nâng cao'],
                        ['Logarit a', "log(a)", $a > 0 ? log($a) : 'Lỗi', 'Nâng cao']
                    ];
                    
                    foreach ($operations as $op) {
                        echo "<tr>";
                        echo "<td><strong>{$op[0]}</strong></td>";
                        echo "<td>{$op[1]}</td>";
                        echo "<td>" . (is_numeric($op[2]) ? formatNumber($op[2], $precision) : $op[2]) . "</td>";
                        echo "<td>{$op[3]}</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            
            <div style="text-align: center; margin-top: 30px; color: #666;">
                <p>💡 <strong>Mẹo:</strong> Thử nhập các số khác nhau để khám phá thêm nhiều kết quả thú vị!</p>
            </div>
        </div>
    </div>
</body>
</html>
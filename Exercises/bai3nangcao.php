<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🎓 Hệ Thống Đánh Giá Học Tập Thông Minh</title>
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
        
        .evaluation-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .input-section, .result-section {
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
        
        .grade-display {
            text-align: center;
            padding: 30px;
            border-radius: 15px;
            margin: 20px 0;
            position: relative;
            overflow: hidden;
        }
        
        .grade-excellent { background: linear-gradient(45deg, #28a745, #20c997); }
        .grade-good { background: linear-gradient(45deg, #17a2b8, #6f42c1); }
        .grade-average { background: linear-gradient(45deg, #ffc107, #fd7e14); }
        .grade-poor { background: linear-gradient(45deg, #dc3545, #e83e8c); }
        
        .grade-score {
            font-size: 4em;
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .grade-text {
            font-size: 1.5em;
            color: white;
            margin-top: 10px;
            font-weight: bold;
        }
        
        .grade-description {
            color: rgba(255,255,255,0.9);
            margin-top: 10px;
            font-size: 1.1em;
        }
        
        .progress-bar {
            width: 100%;
            height: 20px;
            background: rgba(255,255,255,0.3);
            border-radius: 10px;
            margin: 15px 0;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            border-radius: 10px;
            transition: width 0.5s ease;
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
        
        .grade-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .grade-table th, .grade-table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #dee2e6;
        }
        
        .grade-table th {
            background: linear-gradient(45deg, #343a40, #495057);
            color: white;
        }
        
        .grade-table tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        
        .recommendation {
            background: linear-gradient(45deg, #17a2b8, #6610f2);
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }
        
        .recommendation h3 {
            margin-bottom: 15px;
        }
        
        .recommendation ul {
            list-style: none;
            padding-left: 0;
        }
        
        .recommendation li {
            margin: 8px 0;
            padding-left: 20px;
            position: relative;
        }
        
        .recommendation li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #28a745;
            font-weight: bold;
        }
        
        @media (max-width: 768px) {
            .evaluation-grid {
                grid-template-columns: 1fr;
            }
            
            .header h1 {
                font-size: 2em;
            }
            
            .grade-score {
                font-size: 3em;
            }
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="header">
            <h1>🎓 Hệ Thống Đánh Giá Học Tập Thông Minh</h1>
            <p>Đánh giá toàn diện kết quả học tập với phân tích chi tiết</p>
        </div>
        
        <div class="evaluation-grid">
            <div class="input-section">
                <h2 class="section-title">📝 Nhập Điểm Số</h2>
                <form method="POST">
                    <div class="form-group">
                        <label for="score">Điểm số (0-10):</label>
                        <input type="number" id="score" name="score" min="0" max="10" step="0.1" value="<?php echo $_POST['score'] ?? 8; ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Môn học:</label>
                        <select id="subject" name="subject">
                            <option value="Toán" <?php echo ($_POST['subject'] ?? '') == 'Toán' ? 'selected' : ''; ?>>Toán</option>
                            <option value="Văn" <?php echo ($_POST['subject'] ?? '') == 'Văn' ? 'selected' : ''; ?>>Văn</option>
                            <option value="Anh" <?php echo ($_POST['subject'] ?? '') == 'Anh' ? 'selected' : ''; ?>>Tiếng Anh</option>
                            <option value="Lý" <?php echo ($_POST['subject'] ?? '') == 'Lý' ? 'selected' : ''; ?>>Vật Lý</option>
                            <option value="Hóa" <?php echo ($_POST['subject'] ?? '') == 'Hóa' ? 'selected' : ''; ?>>Hóa Học</option>
                            <option value="Sinh" <?php echo ($_POST['subject'] ?? '') == 'Sinh' ? 'selected' : ''; ?>>Sinh Học</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="grade_level">Cấp học:</label>
                        <select id="grade_level" name="grade_level">
                            <option value="Tiểu học" <?php echo ($_POST['grade_level'] ?? '') == 'Tiểu học' ? 'selected' : ''; ?>>Tiểu học</option>
                            <option value="THCS" <?php echo ($_POST['grade_level'] ?? '') == 'THCS' ? 'selected' : ''; ?>>THCS</option>
                            <option value="THPT" <?php echo ($_POST['grade_level'] ?? '') == 'THPT' ? 'selected' : ''; ?>>THPT</option>
                            <option value="Đại học" <?php echo ($_POST['grade_level'] ?? '') == 'Đại học' ? 'selected' : ''; ?>>Đại học</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn">🚀 Đánh Giá</button>
                </form>
            </div>
            
            <div class="result-section">
                <h2 class="section-title">📊 Kết Quả Đánh Giá</h2>
                
                <?php
                $score = floatval($_POST['score'] ?? 8);
                $subject = $_POST['subject'] ?? 'Toán';
                $grade_level = $_POST['grade_level'] ?? 'THCS';
                
                // Xác định xếp loại
                function getGradeInfo($score) {
                    if ($score >= 9) {
                        return [
                            'class' => 'grade-excellent',
                            'text' => 'Xuất Sắc',
                            'emoji' => '🏆',
                            'description' => 'Kết quả tuyệt vời! Bạn đã thể hiện sự xuất sắc.',
                            'percentage' => 100
                        ];
                    } elseif ($score >= 8) {
                        return [
                            'class' => 'grade-good',
                            'text' => 'Giỏi',
                            'emoji' => '⭐',
                            'description' => 'Kết quả rất tốt! Bạn đang trên đường thành công.',
                            'percentage' => 85
                        ];
                    } elseif ($score >= 6.5) {
                        return [
                            'class' => 'grade-good',
                            'text' => 'Khá',
                            'emoji' => '👍',
                            'description' => 'Kết quả khá tốt! Hãy tiếp tục cố gắng.',
                            'percentage' => 70
                        ];
                    } elseif ($score >= 5) {
                        return [
                            'class' => 'grade-average',
                            'text' => 'Trung Bình',
                            'emoji' => '📚',
                            'description' => 'Đạt yêu cầu cơ bản. Cần cải thiện thêm.',
                            'percentage' => 55
                        ];
                    } else {
                        return [
                            'class' => 'grade-poor',
                            'text' => 'Yếu',
                            'emoji' => '📖',
                            'description' => 'Cần nỗ lực nhiều hơn để cải thiện kết quả.',
                            'percentage' => 30
                        ];
                    }
                }
                
                $gradeInfo = getGradeInfo($score);
                
                echo "<div class='grade-display {$gradeInfo['class']}'>";
                echo "<div class='grade-score'>{$gradeInfo['emoji']} {$score}</div>";
                echo "<div class='grade-text'>{$gradeInfo['text']}</div>";
                echo "<div class='grade-description'>{$gradeInfo['description']}</div>";
                echo "<div class='progress-bar'>";
                echo "<div class='progress-fill' style='width: {$gradeInfo['percentage']}%; background: rgba(255,255,255,0.8);'></div>";
                echo "</div>";
                echo "<small>Môn: {$subject} | Cấp: {$grade_level}</small>";
                echo "</div>";
                ?>
            </div>
        </div>
        
        <div class="stats-section">
            <h2 class="section-title">📈 Phân Tích Chi Tiết</h2>
            
            <div class="stats-grid">
                <?php
                $percentage = ($score / 10) * 100;
                $points_to_excellent = max(0, 9 - $score);
                $rank_position = $score >= 8 ? "Top 20%" : ($score >= 6.5 ? "Top 50%" : "Cần cải thiện");
                
                echo "<div class='stat-card'>";
                echo "<span class='stat-number'>{$percentage}%</span>";
                echo "<span>Tỷ lệ hoàn thành</span>";
                echo "</div>";
                
                echo "<div class='stat-card'>";
                echo "<span class='stat-number'>" . number_format($points_to_excellent, 1) . "</span>";
                echo "<span>Điểm cần cải thiện</span>";
                echo "</div>";
                
                echo "<div class='stat-card'>";
                echo "<span class='stat-number'>{$rank_position}</span>";
                echo "<span>Xếp hạng ước tính</span>";
                echo "</div>";
                ?>
            </div>
            
            <h3 style="text-align: center; margin: 30px 0 20px 0; color: #333;">📋 Bảng Thang Điểm Chi Tiết</h3>
            <table class="grade-table">
                <thead>
                    <tr>
                        <th>Khoảng Điểm</th>
                        <th>Xếp Loại</th>
                        <th>Mô Tả</th>
                        <th>Tỷ Lệ %</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="<?php echo $score >= 9 ? 'background-color: #d4edda; font-weight: bold;' : ''; ?>">
                        <td>9.0 - 10.0</td>
                        <td>🏆 Xuất Sắc</td>
                        <td>Thành tích vượt trội</td>
                        <td>90-100%</td>
                    </tr>
                    <tr style="<?php echo $score >= 8 && $score < 9 ? 'background-color: #d4edda; font-weight: bold;' : ''; ?>">
                        <td>8.0 - 8.9</td>
                        <td>⭐ Giỏi</td>
                        <td>Kết quả rất tốt</td>
                        <td>80-89%</td>
                    </tr>
                    <tr style="<?php echo $score >= 6.5 && $score < 8 ? 'background-color: #d4edda; font-weight: bold;' : ''; ?>">
                        <td>6.5 - 7.9</td>
                        <td>👍 Khá</td>
                        <td>Đạt yêu cầu tốt</td>
                        <td>65-79%</td>
                    </tr>
                    <tr style="<?php echo $score >= 5 && $score < 6.5 ? 'background-color: #fff3cd; font-weight: bold;' : ''; ?>">
                        <td>5.0 - 6.4</td>
                        <td>📚 Trung Bình</td>
                        <td>Đạt yêu cầu cơ bản</td>
                        <td>50-64%</td>
                    </tr>
                    <tr style="<?php echo $score < 5 ? 'background-color: #f8d7da; font-weight: bold;' : ''; ?>">
                        <td>0.0 - 4.9</td>
                        <td>📖 Yếu</td>
                        <td>Chưa đạt yêu cầu</td>
                        <td>0-49%</td>
                    </tr>
                </tbody>
            </table>
            
            <?php
            // Đưa ra khuyến nghị
            echo "<div class='recommendation'>";
            echo "<h3>💡 Khuyến Nghị Cải Thiện</h3>";
            
            if ($score >= 9) {
                echo "<ul>";
                echo "<li>Duy trì phong độ xuất sắc hiện tại</li>";
                echo "<li>Chia sẻ kinh nghiệm với bạn bè</li>";
                echo "<li>Thử thách bản thân với các bài tập nâng cao</li>";
                echo "<li>Tham gia các cuộc thi học thuật</li>";
                echo "</ul>";
            } elseif ($score >= 8) {
                echo "<ul>";
                echo "<li>Ôn tập thêm để đạt mức xuất sắc</li>";
                echo "<li>Tập trung vào các điểm yếu</li>";
                echo "<li>Làm thêm bài tập nâng cao</li>";
                echo "<li>Tham gia nhóm học tập</li>";
                echo "</ul>";
            } elseif ($score >= 6.5) {
                echo "<ul>";
                echo "<li>Tăng cường thời gian ôn tập</li>";
                echo "<li>Tìm hiểu phương pháp học hiệu quả</li>";
                echo "<li>Nhờ thầy cô hướng dẫn thêm</li>";
                echo "<li>Lập kế hoạch học tập chi tiết</li>";
                echo "</ul>";
            } elseif ($score >= 5) {
                echo "<ul>";
                echo "<li>Xem lại kiến thức cơ bản</li>";
                echo "<li>Tăng thời gian học và ôn tập</li>";
                echo "<li>Tìm gia sư hoặc lớp học thêm</li>";
                echo "<li>Thay đổi phương pháp học tập</li>";
                echo "</ul>";
            } else {
                echo "<ul>";
                echo "<li>Cần sự hỗ trợ tích cực từ thầy cô</li>";
                echo "<li>Học lại từ kiến thức cơ bản</li>";
                echo "<li>Tăng cường thời gian học đáng kể</li>";
                echo "<li>Tìm phương pháp học phù hợp</li>";
                echo "</ul>";
            }
            echo "</div>";
            ?>
            
            <div style="text-align: center; margin-top: 30px; color: #666;">
                <p>📚 <strong>Lưu ý:</strong> Điểm số chỉ là một phần của quá trình học tập. Quan trọng là sự tiến bộ và nỗ lực không ngừng!</p>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🚀 NEURALINK DATA MATRIX - Elon's Vision</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&display=swap');
        
        body {
            font-family: 'Orbitron', monospace;
            background: radial-gradient(circle at center, #0a0a0a 0%, #1a1a2e 50%, #16213e 100%);
            color: #00ff41;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }
        
        /* Matrix Rain Effect */
        .matrix-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.1;
        }
        
        .matrix-column {
            position: absolute;
            top: -100px;
            font-family: 'Courier New', monospace;
            font-size: 14px;
            color: #00ff41;
            animation: matrix-fall linear infinite;
        }
        
        @keyframes matrix-fall {
            to { transform: translateY(100vh); }
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
            position: relative;
        }
        
        .header h1 {
            font-size: 4em;
            font-weight: 900;
            background: linear-gradient(45deg, #00ff41, #ff6b35, #f7931e, #00d4ff);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 30px rgba(0,255,65,0.5);
            margin-bottom: 20px;
            animation: glow-pulse 2s ease-in-out infinite alternate;
        }
        
        @keyframes glow-pulse {
            from { filter: brightness(1) drop-shadow(0 0 20px #00ff41); }
            to { filter: brightness(1.2) drop-shadow(0 0 40px #00ff41); }
        }
        
        .subtitle {
            font-size: 1.2em;
            color: #ff6b35;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 10px;
        }
        
        .musk-quote {
            font-style: italic;
            color: #00d4ff;
            font-size: 1.1em;
            margin: 20px 0;
            padding: 15px;
            border-left: 4px solid #ff6b35;
            background: rgba(0,212,255,0.1);
            border-radius: 0 10px 10px 0;
        }
        
        .control-panel {
            background: linear-gradient(135deg, rgba(0,0,0,0.8), rgba(26,26,46,0.9));
            border: 2px solid #00ff41;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 0 50px rgba(0,255,65,0.3), inset 0 0 50px rgba(0,0,0,0.5);
            position: relative;
            overflow: hidden;
        }
        
        .control-panel::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #00ff41, #ff6b35, #f7931e, #00d4ff);
            border-radius: 20px;
            z-index: -1;
            animation: border-glow 3s linear infinite;
        }
        
        @keyframes border-glow {
            0% { filter: hue-rotate(0deg); }
            100% { filter: hue-rotate(360deg); }
        }
        
        .neural-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-bottom: 25px;
        }
        
        .neural-input {
            position: relative;
        }
        
        .neural-input label {
            display: block;
            color: #00ff41;
            font-weight: bold;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .neural-input input, .neural-input select {
            width: 100%;
            padding: 15px;
            background: rgba(0,0,0,0.7);
            border: 2px solid #00ff41;
            border-radius: 10px;
            color: #00ff41;
            font-family: 'Orbitron', monospace;
            font-size: 16px;
            transition: all 0.3s;
        }
        
        .neural-input input:focus, .neural-input select:focus {
            outline: none;
            border-color: #ff6b35;
            box-shadow: 0 0 20px rgba(255,107,53,0.5);
            transform: scale(1.02);
        }
        
        .tesla-btn {
            background: linear-gradient(45deg, #ff6b35, #f7931e);
            color: white;
            padding: 18px 40px;
            border: none;
            border-radius: 25px;
            font-family: 'Orbitron', monospace;
            font-weight: bold;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 2px;
            position: relative;
            overflow: hidden;
        }
        
        .tesla-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(255,107,53,0.4);
        }
        
        .tesla-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .tesla-btn:hover::before {
            left: 100%;
        }
        
        .data-matrix {
            background: linear-gradient(135deg, rgba(0,0,0,0.9), rgba(26,26,46,0.8));
            border: 2px solid #00d4ff;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 0 50px rgba(0,212,255,0.3);
            position: relative;
        }
        
        .matrix-title {
            text-align: center;
            font-size: 2em;
            color: #00d4ff;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }
        
        .matrix-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .info-card {
            background: linear-gradient(45deg, rgba(0,255,65,0.1), rgba(0,212,255,0.1));
            border: 1px solid #00ff41;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
        }
        
        .info-number {
            font-size: 2.5em;
            font-weight: bold;
            color: #ff6b35;
            display: block;
        }
        
        .info-label {
            color: #00ff41;
            text-transform: uppercase;
            font-size: 0.9em;
        }
        
        .neuralink-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 2px;
            margin: 20px 0;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 50px rgba(0,255,65,0.2);
        }
        
        .neuralink-table th {
            background: linear-gradient(45deg, #1a1a2e, #16213e);
            color: #00ff41;
            padding: 20px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            border: 1px solid #00ff41;
            position: relative;
        }
        
        .neuralink-table th::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, #00ff41, #ff6b35, #00d4ff);
            animation: data-flow 2s linear infinite;
        }
        
        @keyframes data-flow {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        .neuralink-table td {
            padding: 15px;
            border: 1px solid rgba(0,255,65,0.3);
            text-align: center;
            font-weight: bold;
            position: relative;
            transition: all 0.3s;
            cursor: pointer;
        }
        
        .neuralink-table td:hover {
            transform: scale(1.05);
            z-index: 10;
            box-shadow: 0 0 30px rgba(0,255,65,0.6);
        }
        
        /* Row Patterns - Elon Style */
        .neural-odd {
            background: linear-gradient(45deg, rgba(255,107,53,0.2), rgba(247,147,30,0.2));
            color: #ff6b35;
            border-color: #ff6b35;
        }
        
        .neural-even {
            background: linear-gradient(45deg, rgba(0,212,255,0.2), rgba(0,255,65,0.2));
            color: #00d4ff;
            border-color: #00d4ff;
        }
        
        .spacex-mode .neural-odd {
            background: linear-gradient(45deg, rgba(255,255,255,0.1), rgba(200,200,200,0.1));
            color: #ffffff;
        }
        
        .spacex-mode .neural-even {
            background: linear-gradient(45deg, rgba(0,0,0,0.3), rgba(50,50,50,0.3));
            color: #cccccc;
        }
        
        .ai-stats {
            background: linear-gradient(135deg, rgba(0,0,0,0.8), rgba(26,26,46,0.9));
            border: 2px solid #ff6b35;
            border-radius: 20px;
            padding: 30px;
            margin-top: 30px;
            box-shadow: 0 0 50px rgba(255,107,53,0.3);
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }
        
        .stat-neural {
            background: linear-gradient(45deg, rgba(0,255,65,0.1), rgba(255,107,53,0.1));
            border: 1px solid #00ff41;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .stat-neural::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, #00ff41, #ff6b35, #00d4ff);
            animation: neural-pulse 1.5s ease-in-out infinite;
        }
        
        @keyframes neural-pulse {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 1; }
        }
        
        .musk-insights {
            background: rgba(0,212,255,0.1);
            border: 1px solid #00d4ff;
            border-radius: 15px;
            padding: 25px;
            margin: 30px 0;
        }
        
        .musk-insights h3 {
            color: #ff6b35;
            margin-bottom: 15px;
            text-transform: uppercase;
        }
        
        .insight-list {
            list-style: none;
            padding: 0;
        }
        
        .insight-list li {
            margin: 10px 0;
            padding-left: 25px;
            position: relative;
            color: #00ff41;
        }
        
        .insight-list li::before {
            content: '🚀';
            position: absolute;
            left: 0;
            animation: rocket-bounce 2s ease-in-out infinite;
        }
        
        @keyframes rocket-bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
        
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.5em;
            }
            
            .neural-grid {
                grid-template-columns: 1fr;
            }
            
            .neuralink-table th, .neuralink-table td {
                padding: 10px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <!-- Matrix Background Effect -->
    <div class="matrix-bg" id="matrixBg"></div>
    
    <div class="main-container">
        <div class="header">
            <h1>🚀 NEURALINK DATA MATRIX</h1>
            <div class="subtitle">Elon's Vision of Neural Computing</div>
            <div class="musk-quote">
                "The future of humanity is the merger of biological and digital intelligence" - Elon Musk
            </div>
        </div>
        
        <div class="control-panel">
            <form method="POST">
                <div class="neural-grid">
                    <div class="neural-input">
                        <label for="rows">🧠 Neural Rows:</label>
                        <input type="number" id="rows" name="rows" min="1" max="100" value="<?php echo $_POST['rows'] ?? 12; ?>">
                    </div>
                    <div class="neural-input">
                        <label for="cols">⚡ Data Columns:</label>
                        <input type="number" id="cols" name="cols" min="1" max="50" value="<?php echo $_POST['cols'] ?? 8; ?>">
                    </div>
                    <div class="neural-input">
                        <label for="pattern">🎯 Neural Pattern:</label>
                        <select id="pattern" name="pattern">
                            <option value="tesla" <?php echo ($_POST['pattern'] ?? '') == 'tesla' ? 'selected' : ''; ?>>Tesla Mode</option>
                            <option value="spacex" <?php echo ($_POST['pattern'] ?? '') == 'spacex' ? 'selected' : ''; ?>>SpaceX Mode</option>
                            <option value="neuralink" <?php echo ($_POST['pattern'] ?? '') == 'neuralink' ? 'selected' : ''; ?>>Neuralink Mode</option>
                            <option value="boring" <?php echo ($_POST['pattern'] ?? '') == 'boring' ? 'selected' : ''; ?>>Boring Company</option>
                        </select>
                    </div>
                    <div class="neural-input">
                        <label for="data_type">📊 Data Type:</label>
                        <select id="data_type" name="data_type">
                            <option value="neural" <?php echo ($_POST['data_type'] ?? '') == 'neural' ? 'selected' : ''; ?>>Neural Signals</option>
                            <option value="rocket" <?php echo ($_POST['data_type'] ?? '') == 'rocket' ? 'selected' : ''; ?>>Rocket Data</option>
                            <option value="battery" <?php echo ($_POST['data_type'] ?? '') == 'battery' ? 'selected' : ''; ?>>Battery Stats</option>
                            <option value="ai" <?php echo ($_POST['data_type'] ?? '') == 'ai' ? 'selected' : ''; ?>>AI Metrics</option>
                            <option value="crypto" <?php echo ($_POST['data_type'] ?? '') == 'crypto' ? 'selected' : ''; ?>>Crypto Values</option>
                        </select>
                    </div>
                    <div class="neural-input">
                        <label for="speed">⚡ Processing Speed:</label>
                        <select id="speed" name="speed">
                            <option value="human" <?php echo ($_POST['speed'] ?? '') == 'human' ? 'selected' : ''; ?>>Human Speed</option>
                            <option value="ai" <?php echo ($_POST['speed'] ?? '') == 'ai' ? 'selected' : ''; ?>>AI Speed</option>
                            <option value="quantum" <?php echo ($_POST['speed'] ?? '') == 'quantum' ? 'selected' : ''; ?>>Quantum Speed</option>
                        </select>
                    </div>
                    <div class="neural-input">
                        <label for="complexity">🔬 Complexity Level:</label>
                        <select id="complexity" name="complexity">
                            <option value="basic" <?php echo ($_POST['complexity'] ?? '') == 'basic' ? 'selected' : ''; ?>>Basic Neural</option>
                            <option value="advanced" <?php echo ($_POST['complexity'] ?? '') == 'advanced' ? 'selected' : ''; ?>>Advanced AI</option>
                            <option value="superintelligent" <?php echo ($_POST['complexity'] ?? '') == 'superintelligent' ? 'selected' : ''; ?>>Superintelligent</option>
                        </select>
                    </div>
                </div>
                <div style="text-align: center;">
                    <button type="submit" class="tesla-btn">🚀 Initialize Neural Matrix</button>
                </div>
            </form>
        </div>
        
        <div class="data-matrix <?php echo $_POST['pattern'] ?? ''; ?>-mode">
            <?php
            $rows = max(1, min(100, intval($_POST['rows'] ?? 12)));
            $cols = max(1, min(50, intval($_POST['cols'] ?? 8)));
            $pattern = $_POST['pattern'] ?? 'tesla';
            $data_type = $_POST['data_type'] ?? 'neural';
            $speed = $_POST['speed'] ?? 'ai';
            $complexity = $_POST['complexity'] ?? 'advanced';
            
            echo "<h2 class='matrix-title'>🧠 Neural Data Matrix - {$pattern} Protocol</h2>";
            
            echo "<div class='matrix-info'>";
            echo "<div class='info-card'>";
            echo "<span class='info-number'>{$rows}×{$cols}</span>";
            echo "<span class='info-label'>Matrix Dimensions</span>";
            echo "</div>";
            
            echo "<div class='info-card'>";
            echo "<span class='info-number'>" . ($rows * $cols) . "</span>";
            echo "<span class='info-label'>Neural Nodes</span>";
            echo "</div>";
            
            echo "<div class='info-card'>";
            echo "<span class='info-number'>" . ucfirst($speed) . "</span>";
            echo "<span class='info-label'>Processing Speed</span>";
            echo "</div>";
            
            echo "<div class='info-card'>";
            echo "<span class='info-number'>" . ucfirst($complexity) . "</span>";
            echo "<span class='info-label'>AI Complexity</span>";
            echo "</div>";
            echo "</div>";
            
            // Generate neural data based on type
            function generateNeuralData($i, $j, $type, $complexity) {
                switch($type) {
                    case 'neural':
                        $base = ($complexity == 'superintelligent') ? rand(1000, 9999) : rand(100, 999);
                        return "N{$base}";
                    case 'rocket':
                        $velocity = rand(1000, 11000);
                        return "{$velocity}m/s";
                    case 'battery':
                        $charge = rand(85, 100);
                        return "{$charge}%";
                    case 'ai':
                        $iq = rand(150, 300);
                        return "IQ{$iq}";
                    case 'crypto':
                        $value = rand(30000, 70000);
                        return "\${$value}";
                    default:
                        return "R{$i}C{$j}";
                }
            }
            
            echo "<table class='neuralink-table'>";
            
            // Header
            echo "<thead><tr><th>🧠 Node</th>";
            for ($j = 1; $j <= $cols; $j++) {
                $header_names = ['Alpha', 'Beta', 'Gamma', 'Delta', 'Epsilon', 'Zeta', 'Eta', 'Theta'];
                $header = $header_names[($j-1) % count($header_names)];
                echo "<th>⚡ {$header} {$j}</th>";
            }
            echo "</tr></thead>";
            
            echo "<tbody>";
            for ($i = 1; $i <= $rows; $i++) {
                $row_class = ($i % 2 == 0) ? 'neural-even' : 'neural-odd';
                echo "<tr>";
                echo "<th class='{$row_class}'>🚀 Layer {$i}</th>";
                
                for ($j = 1; $j <= $cols; $j++) {
                    $data = generateNeuralData($i, $j, $data_type, $complexity);
                    echo "<td class='{$row_class}' title='Neural Node [{$i},{$j}] - {$data}'>{$data}</td>";
                }
                echo "</tr>";
            }
            echo "</tbody></table>";
            ?>
        </div>
        
        <div class="ai-stats">
            <h2 class="matrix-title">🤖 AI Performance Analytics</h2>
            
            <div class="stats-grid">
                <?php
                $total_nodes = $rows * $cols;
                $processing_power = $total_nodes * (($complexity == 'superintelligent') ? 1000 : (($complexity == 'advanced') ? 500 : 100));
                $neural_efficiency = min(100, ($total_nodes / 10) + rand(85, 95));
                $quantum_coherence = rand(75, 99);
                
                echo "<div class='stat-neural'>";
                echo "<span class='info-number'>{$total_nodes}</span>";
                echo "<span class='info-label'>Active Neural Nodes</span>";
                echo "</div>";
                
                echo "<div class='stat-neural'>";
                echo "<span class='info-number'>" . number_format($processing_power) . "</span>";
                echo "<span class='info-label'>TFLOPS Processing</span>";
                echo "</div>";
                
                echo "<div class='stat-neural'>";
                echo "<span class='info-number'>{$neural_efficiency}%</span>";
                echo "<span class='info-label'>Neural Efficiency</span>";
                echo "</div>";
                
                echo "<div class='stat-neural'>";
                echo "<span class='info-number'>{$quantum_coherence}%</span>";
                echo "<span class='info-label'>Quantum Coherence</span>";
                echo "</div>";
                ?>
            </div>
            
            <div class="musk-insights">
                <h3>🚀 Elon's Neural Insights</h3>
                <ul class="insight-list">
                    <?php
                    $insights = [
                        "Neural bandwidth increasing exponentially - we're approaching human-AI symbiosis",
                        "This matrix represents the future of brain-computer interfaces",
                        "Each node could process thousands of neural signals simultaneously",
                        "We're building the foundation for digital telepathy",
                        "The merger of biological and artificial intelligence is inevitable",
                        "This is how we'll solve traffic on Mars - neural traffic management",
                        "Boring Company tunnels + Neuralink = instant transportation thoughts"
                    ];
                    
                    $selected_insights = array_rand($insights, 3);
                    foreach($selected_insights as $index) {
                        echo "<li>{$insights[$index]}</li>";
                    }
                    ?>
                </ul>
            </div>
            
            <div style="text-align: center; margin-top: 30px; color: #00d4ff;">
                <p>🧠 <strong>Neural Tip:</strong> Hover over matrix nodes to see detailed neural data! 
                The future is neural - we're just getting started.</p>
                <p style="margin-top: 15px; font-style: italic; color: #ff6b35;">
                "Mars needs neural networks too" - Probably Elon, 2024
                </p>
            </div>
        </div>
    </div>
    
    <script>
        // Matrix Rain Effect
        function createMatrixRain() {
            const matrixBg = document.getElementById('matrixBg');
            const chars = '01アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモヤユヨラリルレロワヲン';
            
            for (let i = 0; i < 50; i++) {
                const column = document.createElement('div');
                column.className = 'matrix-column';
                column.style.left = Math.random() * 100 + '%';
                column.style.animationDuration = (Math.random() * 3 + 2) + 's';
                column.style.animationDelay = Math.random() * 2 + 's';
                
                let text = '';
                for (let j = 0; j < 20; j++) {
                    text += chars[Math.floor(Math.random() * chars.length)] + '<br>';
                }
                column.innerHTML = text;
                
                matrixBg.appendChild(column);
            }
        }
        
        // Neural pulse effect for table cells
        document.addEventListener('DOMContentLoaded', function() {
            createMatrixRain();
            
            const cells = document.querySelectorAll('.neuralink-table td');
            cells.forEach(cell => {
                cell.addEventListener('mouseenter', function() {
                    this.style.boxShadow = '0 0 30px rgba(0,255,65,0.8), inset 0 0 30px rgba(255,107,53,0.3)';
                });
                
                cell.addEventListener('mouseleave', function() {
                    this.style.boxShadow = '';
                });
            });
        });
        
        // Simulate real-time neural data updates
        setInterval(() => {
            const cells = document.querySelectorAll('.neuralink-table td');
            if (cells.length > 0) {
                const randomCell = cells[Math.floor(Math.random() * cells.length)];
                randomCell.style.animation = 'neural-pulse 0.5s ease-in-out';
                setTimeout(() => {
                    randomCell.style.animation = '';
                }, 500);
            }
        }, 2000);
    </script>
</body>
</html>
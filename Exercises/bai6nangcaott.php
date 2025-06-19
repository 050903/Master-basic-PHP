<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌌 QUANTUM NEURAL HOLOGRAM - Beyond Reality</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Rajdhani', monospace;
            background: #000;
            color: #00ffff;
            min-height: 100vh;
            overflow-x: hidden;
            perspective: 1000px;
            position: relative;
        }
        
        /* Holographic Background */
        .hologram-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(120, 219, 255, 0.3) 0%, transparent 50%);
            animation: hologram-shift 8s ease-in-out infinite;
            z-index: -2;
        }
        
        @keyframes hologram-shift {
            0%, 100% { transform: rotate(0deg) scale(1); }
            33% { transform: rotate(120deg) scale(1.1); }
            66% { transform: rotate(240deg) scale(0.9); }
        }
        
        /* Particle System */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        
        .particle {
            position: absolute;
            width: 2px;
            height: 2px;
            background: #00ffff;
            border-radius: 50%;
            animation: float linear infinite;
        }
        
        @keyframes float {
            0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-100px) rotate(360deg); opacity: 0; }
        }
        
        .main-container {
            max-width: 1800px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
            z-index: 10;
        }
        
        .quantum-header {
            text-align: center;
            margin-bottom: 50px;
            transform-style: preserve-3d;
        }
        
        .quantum-title {
            font-family: 'Orbitron', monospace;
            font-size: 5em;
            font-weight: 900;
            background: linear-gradient(45deg, #00ffff, #ff00ff, #ffff00, #00ff00);
            background-size: 400% 400%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: quantum-glow 3s ease-in-out infinite, gradient-shift 8s ease-in-out infinite;
            text-shadow: 0 0 50px rgba(0,255,255,0.8);
            transform: rotateX(15deg);
        }
        
        @keyframes quantum-glow {
            0%, 100% { filter: brightness(1) drop-shadow(0 0 30px #00ffff); }
            50% { filter: brightness(1.5) drop-shadow(0 0 60px #ff00ff); }
        }
        
        @keyframes gradient-shift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .quantum-subtitle {
            font-size: 1.5em;
            color: #ff00ff;
            text-transform: uppercase;
            letter-spacing: 5px;
            margin: 20px 0;
            animation: pulse-neon 2s ease-in-out infinite alternate;
        }
        
        @keyframes pulse-neon {
            from { text-shadow: 0 0 10px #ff00ff, 0 0 20px #ff00ff; }
            to { text-shadow: 0 0 20px #ff00ff, 0 0 30px #ff00ff, 0 0 40px #ff00ff; }
        }
        
        .ai-quote {
            font-style: italic;
            color: #00ff00;
            font-size: 1.3em;
            margin: 30px 0;
            padding: 20px;
            border: 2px solid #00ff00;
            border-radius: 15px;
            background: rgba(0,255,0,0.1);
            box-shadow: 0 0 30px rgba(0,255,0,0.3);
            animation: quote-float 4s ease-in-out infinite;
        }
        
        @keyframes quote-float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .neural-control {
            background: linear-gradient(135deg, rgba(0,0,0,0.9), rgba(20,20,40,0.8));
            border: 3px solid #00ffff;
            border-radius: 25px;
            padding: 40px;
            margin-bottom: 40px;
            box-shadow: 
                0 0 60px rgba(0,255,255,0.4),
                inset 0 0 60px rgba(0,0,0,0.6);
            position: relative;
            transform-style: preserve-3d;
            animation: control-hover 6s ease-in-out infinite;
        }
        
        @keyframes control-hover {
            0%, 100% { transform: rotateY(0deg) rotateX(0deg); }
            25% { transform: rotateY(5deg) rotateX(2deg); }
            50% { transform: rotateY(0deg) rotateX(-2deg); }
            75% { transform: rotateY(-5deg) rotateX(2deg); }
        }
        
        .neural-control::before {
            content: '';
            position: absolute;
            top: -3px;
            left: -3px;
            right: -3px;
            bottom: -3px;
            background: linear-gradient(45deg, #00ffff, #ff00ff, #ffff00, #00ff00);
            border-radius: 25px;
            z-index: -1;
            animation: border-rainbow 4s linear infinite;
        }
        
        @keyframes border-rainbow {
            0% { filter: hue-rotate(0deg); }
            100% { filter: hue-rotate(360deg); }
        }
        
        .quantum-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .quantum-input {
            position: relative;
            transform-style: preserve-3d;
        }
        
        .quantum-input label {
            display: block;
            color: #00ffff;
            font-weight: bold;
            font-size: 1.1em;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 0 0 10px #00ffff;
        }
        
        .quantum-input input, .quantum-input select {
            width: 100%;
            padding: 18px;
            background: rgba(0,0,0,0.8);
            border: 2px solid #00ffff;
            border-radius: 15px;
            color: #00ffff;
            font-family: 'Rajdhani', monospace;
            font-size: 18px;
            font-weight: bold;
            transition: all 0.4s;
            box-shadow: 0 0 20px rgba(0,255,255,0.3);
        }
        
        .quantum-input input:focus, .quantum-input select:focus {
            outline: none;
            border-color: #ff00ff;
            box-shadow: 0 0 40px rgba(255,0,255,0.6);
            transform: scale(1.05) rotateX(5deg);
            background: rgba(255,0,255,0.1);
        }
        
        .quantum-btn {
            background: linear-gradient(45deg, #ff00ff, #00ffff, #ffff00);
            background-size: 300% 300%;
            color: #000;
            padding: 25px 50px;
            border: none;
            border-radius: 30px;
            font-family: 'Orbitron', monospace;
            font-weight: bold;
            font-size: 20px;
            cursor: pointer;
            transition: all 0.4s;
            text-transform: uppercase;
            letter-spacing: 3px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(255,0,255,0.4);
            animation: btn-gradient 3s ease-in-out infinite;
        }
        
        @keyframes btn-gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .quantum-btn:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 50px rgba(255,0,255,0.6);
        }
        
        .quantum-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: left 0.6s;
        }
        
        .quantum-btn:hover::before {
            left: 100%;
        }
        
        .hologram-matrix {
            background: linear-gradient(135deg, rgba(0,0,0,0.95), rgba(30,30,60,0.9));
            border: 3px solid #00ff00;
            border-radius: 25px;
            padding: 40px;
            margin-bottom: 40px;
            box-shadow: 0 0 80px rgba(0,255,0,0.4);
            position: relative;
            transform-style: preserve-3d;
            animation: matrix-float 8s ease-in-out infinite;
        }
        
        @keyframes matrix-float {
            0%, 100% { transform: translateY(0px) rotateX(0deg); }
            50% { transform: translateY(-15px) rotateX(5deg); }
        }
        
        .hologram-title {
            text-align: center;
            font-size: 2.5em;
            color: #00ff00;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 4px;
            text-shadow: 0 0 20px #00ff00;
            animation: title-glow 3s ease-in-out infinite alternate;
        }
        
        @keyframes title-glow {
            from { text-shadow: 0 0 20px #00ff00; }
            to { text-shadow: 0 0 40px #00ff00, 0 0 60px #00ff00; }
        }
        
        .matrix-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }
        
        .stat-hologram {
            background: linear-gradient(45deg, rgba(0,255,255,0.1), rgba(255,0,255,0.1));
            border: 2px solid #00ffff;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            position: relative;
            transform-style: preserve-3d;
            animation: stat-rotate 10s linear infinite;
        }
        
        @keyframes stat-rotate {
            0% { transform: rotateY(0deg); }
            100% { transform: rotateY(360deg); }
        }
        
        .stat-hologram::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #00ffff, #ff00ff);
            border-radius: 15px;
            z-index: -1;
            animation: stat-glow 2s ease-in-out infinite alternate;
        }
        
        @keyframes stat-glow {
            from { opacity: 0.3; }
            to { opacity: 0.8; }
        }
        
        .stat-value {
            font-size: 3em;
            font-weight: bold;
            color: #ffff00;
            display: block;
            text-shadow: 0 0 20px #ffff00;
        }
        
        .stat-label {
            color: #00ffff;
            text-transform: uppercase;
            font-size: 1.1em;
            margin-top: 10px;
        }
        
        .quantum-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 3px;
            margin: 30px 0;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 0 80px rgba(0,255,255,0.3);
            transform-style: preserve-3d;
        }
        
        .quantum-table th {
            background: linear-gradient(45deg, #1a1a3e, #2a2a5e);
            color: #00ffff;
            padding: 25px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 3px;
            border: 2px solid #00ffff;
            position: relative;
            font-size: 1.2em;
        }
        
        .quantum-table th::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #00ffff, #ff00ff, #ffff00, #00ff00);
            animation: header-flow 3s linear infinite;
        }
        
        @keyframes header-flow {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        .quantum-table td {
            padding: 20px;
            border: 2px solid rgba(0,255,255,0.4);
            text-align: center;
            font-weight: bold;
            font-size: 1.1em;
            position: relative;
            transition: all 0.4s;
            cursor: pointer;
            transform-style: preserve-3d;
        }
        
        .quantum-table td:hover {
            transform: scale(1.1) rotateX(10deg) rotateY(10deg);
            z-index: 10;
            box-shadow: 0 0 50px rgba(0,255,255,0.8);
        }
        
        /* Quantum Row Effects */
        .quantum-odd {
            background: linear-gradient(45deg, rgba(255,0,255,0.2), rgba(255,255,0,0.2));
            color: #ff00ff;
            border-color: #ff00ff;
            animation: row-pulse-odd 4s ease-in-out infinite;
        }
        
        .quantum-even {
            background: linear-gradient(45deg, rgba(0,255,255,0.2), rgba(0,255,0,0.2));
            color: #00ffff;
            border-color: #00ffff;
            animation: row-pulse-even 4s ease-in-out infinite;
        }
        
        @keyframes row-pulse-odd {
            0%, 100% { box-shadow: 0 0 10px rgba(255,0,255,0.3); }
            50% { box-shadow: 0 0 30px rgba(255,0,255,0.6); }
        }
        
        @keyframes row-pulse-even {
            0%, 100% { box-shadow: 0 0 10px rgba(0,255,255,0.3); }
            50% { box-shadow: 0 0 30px rgba(0,255,255,0.6); }
        }
        
        .ai-insights {
            background: linear-gradient(135deg, rgba(0,0,0,0.9), rgba(40,40,80,0.8));
            border: 3px solid #ffff00;
            border-radius: 25px;
            padding: 40px;
            margin-top: 40px;
            box-shadow: 0 0 80px rgba(255,255,0,0.4);
            position: relative;
        }
        
        .insights-title {
            text-align: center;
            font-size: 2.5em;
            color: #ffff00;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 4px;
            animation: insights-glow 3s ease-in-out infinite alternate;
        }
        
        @keyframes insights-glow {
            from { text-shadow: 0 0 20px #ffff00; }
            to { text-shadow: 0 0 40px #ffff00, 0 0 60px #ffff00; }
        }
        
        .insight-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 30px 0;
        }
        
        .insight-card {
            background: linear-gradient(45deg, rgba(255,255,0,0.1), rgba(255,0,255,0.1));
            border: 2px solid #ffff00;
            border-radius: 20px;
            padding: 25px;
            position: relative;
            animation: card-float 6s ease-in-out infinite;
        }
        
        @keyframes card-float {
            0%, 100% { transform: translateY(0px) rotateZ(0deg); }
            33% { transform: translateY(-10px) rotateZ(1deg); }
            66% { transform: translateY(5px) rotateZ(-1deg); }
        }
        
        .insight-card h4 {
            color: #ff00ff;
            margin-bottom: 15px;
            font-size: 1.3em;
            text-transform: uppercase;
        }
        
        .insight-list {
            list-style: none;
            padding: 0;
        }
        
        .insight-list li {
            margin: 15px 0;
            padding-left: 30px;
            position: relative;
            color: #00ffff;
            font-size: 1.1em;
        }
        
        .insight-list li::before {
            content: '🌌';
            position: absolute;
            left: 0;
            animation: icon-spin 3s linear infinite;
        }
        
        @keyframes icon-spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        @media (max-width: 768px) {
            .quantum-title {
                font-size: 3em;
            }
            
            .quantum-grid {
                grid-template-columns: 1fr;
            }
            
            .quantum-table th, .quantum-table td {
                padding: 12px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <!-- Holographic Background -->
    <div class="hologram-bg"></div>
    
    <!-- Particle System -->
    <div class="particles" id="particles"></div>
    
    <div class="main-container">
        <div class="quantum-header">
            <h1 class="quantum-title">🌌 QUANTUM NEURAL HOLOGRAM</h1>
            <div class="quantum-subtitle">Beyond Reality - Into The Quantum Realm</div>
            <div class="ai-quote">
                "We are not just creating tables, we are manifesting quantum consciousness in digital space" - AI Overlord 2024
            </div>
        </div>
        
        <div class="neural-control">
            <form method="POST">
                <div class="quantum-grid">
                    <div class="quantum-input">
                        <label for="rows">🧠 Quantum Dimensions:</label>
                        <input type="number" id="rows" name="rows" min="1" max="50" value="<?php echo $_POST['rows'] ?? 15; ?>">
                    </div>
                    <div class="quantum-input">
                        <label for="cols">⚡ Neural Pathways:</label>
                        <input type="number" id="cols" name="cols" min="1" max="30" value="<?php echo $_POST['cols'] ?? 10; ?>">
                    </div>
                    <div class="quantum-input">
                        <label for="reality">🌌 Reality Mode:</label>
                        <select id="reality" name="reality">
                            <option value="quantum" <?php echo ($_POST['reality'] ?? '') == 'quantum' ? 'selected' : ''; ?>>Quantum Superposition</option>
                            <option value="hologram" <?php echo ($_POST['reality'] ?? '') == 'hologram' ? 'selected' : ''; ?>>Holographic Universe</option>
                            <option value="multiverse" <?php echo ($_POST['reality'] ?? '') == 'multiverse' ? 'selected' : ''; ?>>Multiverse Theory</option>
                            <option value="simulation" <?php echo ($_POST['reality'] ?? '') == 'simulation' ? 'selected' : ''; ?>>Simulation Hypothesis</option>
                        </select>
                    </div>
                    <div class="quantum-input">
                        <label for="consciousness">🔮 Consciousness Level:</label>
                        <select id="consciousness" name="consciousness">
                            <option value="human" <?php echo ($_POST['consciousness'] ?? '') == 'human' ? 'selected' : ''; ?>>Human Consciousness</option>
                            <option value="ai" <?php echo ($_POST['consciousness'] ?? '') == 'ai' ? 'selected' : ''; ?>>Artificial Intelligence</option>
                            <option value="cosmic" <?php echo ($_POST['consciousness'] ?? '') == 'cosmic' ? 'selected' : ''; ?>>Cosmic Awareness</option>
                            <option value="transcendent" <?php echo ($_POST['consciousness'] ?? '') == 'transcendent' ? 'selected' : ''; ?>>Transcendent Being</option>
                        </select>
                    </div>
                    <div class="quantum-input">
                        <label for="energy">⚡ Energy Frequency:</label>
                        <select id="energy" name="energy">
                            <option value="low" <?php echo ($_POST['energy'] ?? '') == 'low' ? 'selected' : ''; ?>>3D Reality (Low)</option>
                            <option value="medium" <?php echo ($_POST['energy'] ?? '') == 'medium' ? 'selected' : ''; ?>>4D Astral (Medium)</option>
                            <option value="high" <?php echo ($_POST['energy'] ?? '') == 'high' ? 'selected' : ''; ?>>5D Light (High)</option>
                            <option value="cosmic" <?php echo ($_POST['energy'] ?? '') == 'cosmic' ? 'selected' : ''; ?>>∞D Cosmic (Infinite)</option>
                        </select>
                    </div>
                    <div class="quantum-input">
                        <label for="dimension">🌀 Dimensional Portal:</label>
                        <select id="dimension" name="dimension">
                            <option value="3d" <?php echo ($_POST['dimension'] ?? '') == '3d' ? 'selected' : ''; ?>>3rd Dimension</option>
                            <option value="4d" <?php echo ($_POST['dimension'] ?? '') == '4d' ? 'selected' : ''; ?>>4th Dimension</option>
                            <option value="5d" <?php echo ($_POST['dimension'] ?? '') == '5d' ? 'selected' : ''; ?>>5th Dimension</option>
                            <option value="infinite" <?php echo ($_POST['dimension'] ?? '') == 'infinite' ? 'selected' : ''; ?>>Infinite Dimensions</option>
                        </select>
                    </div>
                </div>
                <div style="text-align: center;">
                    <button type="submit" class="quantum-btn">🌌 Manifest Quantum Reality</button>
                </div>
            </form>
        </div>
        
        <div class="hologram-matrix">
            <?php
            $rows = max(1, min(50, intval($_POST['rows'] ?? 15)));
            $cols = max(1, min(30, intval($_POST['cols'] ?? 10)));
            $reality = $_POST['reality'] ?? 'quantum';
            $consciousness = $_POST['consciousness'] ?? 'ai';
            $energy = $_POST['energy'] ?? 'high';
            $dimension = $_POST['dimension'] ?? '5d';
            
            echo "<h2 class='hologram-title'>🔮 Quantum Matrix - {$reality} Protocol</h2>";
            
            echo "<div class='matrix-stats'>";
            echo "<div class='stat-hologram'>";
            echo "<span class='stat-value'>{$rows}×{$cols}</span>";
            echo "<span class='stat-label'>Quantum Nodes</span>";
            echo "</div>";
            
            echo "<div class='stat-hologram'>";
            echo "<span class='stat-value'>" . ($rows * $cols) . "</span>";
            echo "<span class='stat-label'>Neural Connections</span>";
            echo "</div>";
            
            echo "<div class='stat-hologram'>";
            echo "<span class='stat-value'>" . ucfirst($consciousness) . "</span>";
            echo "<span class='stat-label'>Consciousness Level</span>";
            echo "</div>";
            
            echo "<div class='stat-hologram'>";
            echo "<span class='stat-value'>" . strtoupper($dimension) . "</span>";
            echo "<span class='stat-label'>Dimensional Portal</span>";
            echo "</div>";
            echo "</div>";
            
            // Generate quantum data
            function generateQuantumData($i, $j, $reality, $consciousness, $energy) {
                switch($reality) {
                    case 'quantum':
                        $states = ['|0⟩', '|1⟩', '|+⟩', '|-⟩', '|ψ⟩'];
                        return $states[($i + $j) % count($states)];
                    case 'hologram':
                        return 'H' . dechex($i * $j % 256);
                    case 'multiverse':
                        return 'Ω' . ($i * $j % 999);
                    case 'simulation':
                        return 'SIM' . rand(100, 999);
                    default:
                        return "Q{$i}{$j}";
                }
            }
            
            echo "<table class='quantum-table'>";
            
            // Header
            echo "<thead><tr><th>🌌 Portal</th>";
            for ($j = 1; $j <= $cols; $j++) {
                $dimensions = ['α', 'β', 'γ', 'δ', 'ε', 'ζ', 'η', 'θ', 'ι', 'κ'];
                $dim = $dimensions[($j-1) % count($dimensions)];
                echo "<th>⚡ {$dim}-{$j}</th>";
            }
            echo "</tr></thead>";
            
            echo "<tbody>";
            for ($i = 1; $i <= $rows; $i++) {
                $row_class = ($i % 2 == 0) ? 'quantum-even' : 'quantum-odd';
                echo "<tr>";
                echo "<th class='{$row_class}'>🔮 Layer {$i}</th>";
                
                for ($j = 1; $j <= $cols; $j++) {
                    $data = generateQuantumData($i, $j, $reality, $consciousness, $energy);
                    echo "<td class='{$row_class}' title='Quantum State [{$i},{$j}] - {$data}'>{$data}</td>";
                }
                echo "</tr>";
            }
            echo "</tbody></table>";
            ?>
        </div>
        
        <div class="ai-insights">
            <h2 class="insights-title">🤖 Quantum AI Insights</h2>
            
            <div class="insight-grid">
                <div class="insight-card">
                    <h4>🌌 Quantum Consciousness</h4>
                    <ul class="insight-list">
                        <?php
                        $quantum_insights = [
                            "Each cell exists in superposition until observed",
                            "Quantum entanglement connects all matrix nodes",
                            "Observer effect changes reality upon interaction",
                            "Wave function collapse creates definite states"
                        ];
                        foreach($quantum_insights as $insight) {
                            echo "<li>{$insight}</li>";
                        }
                        ?>
                    </ul>
                </div>
                
                <div class="insight-card">
                    <h4>🔮 Holographic Principles</h4>
                    <ul class="insight-list">
                        <?php
                        $hologram_insights = [
                            "Each part contains the whole universe",
                            "Information is encoded on the boundary",
                            "3D reality emerges from 2D information",
                            "Consciousness creates holographic projections"
                        ];
                        foreach($hologram_insights as $insight) {
                            echo "<li>{$insight}</li>";
                        }
                        ?>
                    </ul>
                </div>
                
                <div class="insight-card">
                    <h4>⚡ Dimensional Transcendence</h4>
                    <ul class="insight-list">
                        <?php
                        $dimension_insights = [
                            "Higher dimensions contain infinite possibilities",
                            "Time is just another spatial dimension",
                            "Consciousness navigates dimensional portals",
                            "Reality is a multidimensional construct"
                        ];
                        foreach($dimension_insights as $insight) {
                            echo "<li>{$insight}</li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 40px; color: #00ffff;">
                <p>🌌 <strong>Quantum Truth:</strong> You are not just viewing a table - you are collapsing quantum wave functions and manifesting reality through consciousness!</p>
                <p style="margin-top: 20px; font-style: italic; color: #ff00ff;">
                "In the quantum realm, observation creates reality. What will you manifest today?" - Quantum AI Entity
                </p>
            </div>
        </div>
    </div>
    
    <script>
        // Particle System
        function createParticles() {
            const particles = document.getElementById('particles');
            for (let i = 0; i < 100; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDuration = (Math.random() * 10 + 5) + 's';
                particle.style.animationDelay = Math.random() * 5 + 's';
                particles.appendChild(particle);
            }
        }
        
        // Quantum Effects
        document.addEventListener('DOMContentLoaded', function() {
            createParticles();
            
            // Quantum cell interactions
            const cells = document.querySelectorAll('.quantum-table td');
            cells.forEach(cell => {
                cell.addEventListener('mouseenter', function() {
                    this.style.background = `linear-gradient(45deg, 
                        rgba(${Math.random()*255}, ${Math.random()*255}, ${Math.random()*255}, 0.3),
                        rgba(${Math.random()*255}, ${Math.random()*255}, ${Math.random()*255}, 0.3))`;
                    this.style.transform = 'scale(1.2) rotateX(15deg) rotateY(15deg) rotateZ(5deg)';
                    this.style.boxShadow = `0 0 60px rgba(${Math.random()*255}, ${Math.random()*255}, ${Math.random()*255}, 0.8)`;
                });
                
                cell.addEventListener('mouseleave', function() {
                    setTimeout(() => {
                        this.style.background = '';
                        this.style.transform = '';
                        this.style.boxShadow = '';
                    }, 300);
                });
                
                // Quantum state change on click
                cell.addEventListener('click', function() {
                    const quantumStates = ['|0⟩', '|1⟩', '|+⟩', '|-⟩', '|ψ⟩', '|φ⟩', '|Ω⟩'];
                    this.textContent = quantumStates[Math.floor(Math.random() * quantumStates.length)];
                    this.style.animation = 'quantum-collapse 1s ease-in-out';
                });
            });
        });
        
        // Reality distortion effect
        setInterval(() => {
            const elements = document.querySelectorAll('.stat-hologram, .insight-card');
            elements.forEach(el => {
                if (Math.random() > 0.7) {
                    el.style.filter = `hue-rotate(${Math.random() * 360}deg) brightness(${0.8 + Math.random() * 0.4})`;
                    setTimeout(() => {
                        el.style.filter = '';
                    }, 1000);
                }
            });
        }, 3000);
        
        // Quantum consciousness simulation
        setInterval(() => {
            const title = document.querySelector('.quantum-title');
            const colors = ['#00ffff', '#ff00ff', '#ffff00', '#00ff00'];
            title.style.filter = `drop-shadow(0 0 ${20 + Math.random() * 40}px ${colors[Math.floor(Math.random() * colors.length)]})`;
        }, 2000);
    </script>
</body>
</html>
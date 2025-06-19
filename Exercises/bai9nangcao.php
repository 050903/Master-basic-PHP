<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🚀 TECH TITANS FACTORIAL ENGINE - The Future of Mathematics</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&family=JetBrains+Mono:wght@400;700&display=swap');
        
        :root {
            --tesla-red: #e31937;
            --spacex-blue: #005288;
            --facebook-blue: #1877f2;
            --apple-gray: #1d1d1f;
            --google-blue: #4285f4;
            --amazon-orange: #ff9900;
            --microsoft-blue: #0078d4;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }
        
        /* Animated Background */
        .tech-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: 
                radial-gradient(circle at 20% 20%, rgba(24,119,242,0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(227,25,55,0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 60%, rgba(66,133,244,0.1) 0%, transparent 50%);
            animation: tech-float 15s ease-in-out infinite;
        }
        
        @keyframes tech-float {
            0%, 100% { transform: rotate(0deg) scale(1); }
            50% { transform: rotate(180deg) scale(1.1); }
        }
        
        .main-container {
            max-width: 1800px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
            z-index: 10;
        }
        
        .header {
            text-align: center;
            color: white;
            margin-bottom: 50px;
        }
        
        .header h1 {
            font-size: 4em;
            font-weight: 900;
            background: linear-gradient(45deg, var(--tesla-red), var(--facebook-blue), var(--google-blue), var(--amazon-orange));
            background-size: 400% 400%;
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradient-shift 4s ease-in-out infinite;
            margin-bottom: 20px;
            text-shadow: 0 0 50px rgba(255,255,255,0.3);
        }
        
        @keyframes gradient-shift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .subtitle {
            font-size: 1.5em;
            color: #ffd700;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 4px;
        }
        
        .ceo-quotes {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }
        
        .ceo-quote {
            background: rgba(255,255,255,0.1);
            border: 2px solid;
            border-radius: 15px;
            padding: 20px;
            backdrop-filter: blur(10px);
            transition: all 0.3s;
        }
        
        .ceo-quote:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
        
        .quote-elon { border-color: var(--tesla-red); }
        .quote-zuck { border-color: var(--facebook-blue); }
        .quote-gates { border-color: var(--microsoft-blue); }
        .quote-bezos { border-color: var(--amazon-orange); }
        
        .quote-author {
            font-weight: bold;
            font-size: 1.1em;
            margin-bottom: 10px;
        }
        
        .quote-text {
            font-style: italic;
            opacity: 0.9;
        }
        
        .factorial-dashboard {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .control-center {
            background: rgba(255,255,255,0.95);
            border-radius: 25px;
            padding: 40px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.2);
            backdrop-filter: blur(20px);
        }
        
        .control-title {
            font-size: 2em;
            color: var(--apple-gray);
            margin-bottom: 30px;
            text-align: center;
            font-weight: 700;
        }
        
        .input-group {
            margin-bottom: 25px;
        }
        
        .input-group label {
            display: block;
            font-weight: 600;
            color: var(--apple-gray);
            margin-bottom: 10px;
            font-size: 1.1em;
        }
        
        .input-group input, .input-group select {
            width: 100%;
            padding: 15px;
            border: 2px solid #e1e5e9;
            border-radius: 12px;
            font-family: 'JetBrains Mono', monospace;
            font-size: 16px;
            transition: all 0.3s;
            background: white;
        }
        
        .input-group input:focus, .input-group select:focus {
            outline: none;
            border-color: var(--facebook-blue);
            box-shadow: 0 0 20px rgba(24,119,242,0.2);
            transform: scale(1.02);
        }
        
        .tech-btn {
            width: 100%;
            padding: 18px;
            background: linear-gradient(45deg, var(--facebook-blue), var(--google-blue));
            color: white;
            border: none;
            border-radius: 15px;
            font-weight: 700;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-top: 20px;
        }
        
        .tech-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(24,119,242,0.4);
        }
        
        .results-center {
            background: rgba(255,255,255,0.95);
            border-radius: 25px;
            padding: 40px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.2);
            backdrop-filter: blur(20px);
        }
        
        .results-title {
            font-size: 2.5em;
            color: var(--apple-gray);
            margin-bottom: 30px;
            text-align: center;
            font-weight: 700;
        }
        
        .factorial-display {
            background: linear-gradient(135deg, var(--tesla-red), var(--spacex-blue));
            color: white;
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            margin: 30px 0;
            box-shadow: 0 20px 40px rgba(227,25,55,0.3);
        }
        
        .factorial-number {
            font-size: 4em;
            font-weight: 900;
            font-family: 'JetBrains Mono', monospace;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .factorial-formula {
            font-size: 1.3em;
            opacity: 0.9;
            font-family: 'JetBrains Mono', monospace;
        }
        
        .tech-metrics {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }
        
        .metric-card {
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            color: white;
            font-weight: 600;
            transition: transform 0.3s;
        }
        
        .metric-card:hover {
            transform: scale(1.05);
        }
        
        .metric-tesla { background: linear-gradient(135deg, var(--tesla-red), #ff4757); }
        .metric-facebook { background: linear-gradient(135deg, var(--facebook-blue), #4834d4); }
        .metric-google { background: linear-gradient(135deg, var(--google-blue), #00d2d3); }
        .metric-amazon { background: linear-gradient(135deg, var(--amazon-orange), #ff6348); }
        
        .metric-value {
            font-size: 2.5em;
            font-weight: 900;
            display: block;
            margin-bottom: 5px;
        }
        
        .metric-label {
            font-size: 0.9em;
            opacity: 0.9;
        }
        
        .algorithm-showcase {
            background: rgba(255,255,255,0.95);
            border-radius: 25px;
            padding: 40px;
            margin-top: 40px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.2);
        }
        
        .showcase-title {
            font-size: 2.5em;
            color: var(--apple-gray);
            margin-bottom: 30px;
            text-align: center;
            font-weight: 700;
        }
        
        .algorithm-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin: 30px 0;
        }
        
        .algorithm-card {
            border: 3px solid;
            border-radius: 20px;
            padding: 30px;
            transition: all 0.3s;
        }
        
        .algorithm-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .algo-iterative { border-color: var(--tesla-red); }
        .algo-recursive { border-color: var(--facebook-blue); }
        .algo-memoized { border-color: var(--google-blue); }
        .algo-stirling { border-color: var(--amazon-orange); }
        
        .algo-title {
            font-size: 1.5em;
            font-weight: 700;
            margin-bottom: 15px;
        }
        
        .algo-description {
            margin-bottom: 20px;
            line-height: 1.6;
        }
        
        .algo-code {
            background: var(--apple-gray);
            color: #a3a3a3;
            padding: 20px;
            border-radius: 10px;
            font-family: 'JetBrains Mono', monospace;
            font-size: 14px;
            overflow-x: auto;
        }
        
        .ceo-insights {
            background: var(--apple-gray);
            color: white;
            border-radius: 25px;
            padding: 40px;
            margin-top: 40px;
        }
        
        .insights-title {
            font-size: 2.5em;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 700;
        }
        
        .insights-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 30px 0;
        }
        
        .insight-card {
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            padding: 25px;
            backdrop-filter: blur(10px);
        }
        
        .insight-card h3 {
            margin-bottom: 15px;
            font-size: 1.3em;
            color: #ffd700;
        }
        
        .insight-list {
            list-style: none;
            padding: 0;
        }
        
        .insight-list li {
            margin: 10px 0;
            padding-left: 25px;
            position: relative;
        }
        
        .insight-list li::before {
            content: '🚀';
            position: absolute;
            left: 0;
        }
        
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.5em;
            }
            
            .factorial-dashboard {
                grid-template-columns: 1fr;
            }
            
            .ceo-quotes {
                grid-template-columns: 1fr;
            }
            
            .factorial-number {
                font-size: 2.5em;
            }
        }
    </style>
</head>
<body>
    <div class="tech-bg"></div>
    
    <div class="main-container">
        <div class="header">
            <h1>🚀 TECH TITANS FACTORIAL ENGINE</h1>
            <div class="subtitle">The Future of Mathematical Computing</div>
            <div style="font-size: 1.1em; opacity: 0.9; margin-top: 15px;">
                "Innovation distinguishes between a leader and a follower" - Steve Jobs
            </div>
        </div>
        
        <div class="ceo-quotes">
            <div class="ceo-quote quote-elon">
                <div class="quote-author" style="color: var(--tesla-red);">🚀 Elon Musk</div>
                <div class="quote-text">"Mathematics is the language of the universe. Factorial calculations power rocket trajectories to Mars!"</div>
            </div>
            
            <div class="ceo-quote quote-zuck">
                <div class="quote-author" style="color: var(--facebook-blue);">👨‍💻 Mark Zuckerberg</div>
                <div class="quote-text">"Connecting 3 billion people requires factorial-level scaling. Every algorithm matters!"</div>
            </div>
            
            <div class="ceo-quote quote-gates">
                <div class="quote-author" style="color: var(--microsoft-blue);">💻 Bill Gates</div>
                <div class="quote-text">"Software is eating the world, and mathematics is the foundation of all great software."</div>
            </div>
            
            <div class="ceo-quote quote-bezos">
                <div class="quote-author" style="color: var(--amazon-orange);">📦 Jeff Bezos</div>
                <div class="quote-text">"Day 1 thinking means constantly optimizing algorithms. Factorial efficiency drives customer obsession!"</div>
            </div>
        </div>
        
        <div class="factorial-dashboard">
            <div class="control-center">
                <h2 class="control-title">🎛️ Mission Control</h2>
                <form method="POST">
                    <div class="input-group">
                        <label for="number">🔢 Input Number (n):</label>
                        <input type="number" id="number" name="number" min="0" max="170" value="<?php echo $_POST['number'] ?? 10; ?>">
                    </div>
                    
                    <div class="input-group">
                        <label for="algorithm">⚡ Algorithm Choice:</label>
                        <select id="algorithm" name="algorithm">
                            <option value="iterative" <?php echo ($_POST['algorithm'] ?? '') == 'iterative' ? 'selected' : ''; ?>>Iterative (Tesla Style)</option>
                            <option value="recursive" <?php echo ($_POST['algorithm'] ?? '') == 'recursive' ? 'selected' : ''; ?>>Recursive (Facebook Style)</option>
                            <option value="memoized" <?php echo ($_POST['algorithm'] ?? '') == 'memoized' ? 'selected' : ''; ?>>Memoized (Google Style)</option>
                            <option value="stirling" <?php echo ($_POST['algorithm'] ?? '') == 'stirling' ? 'selected' : ''; ?>>Stirling Approximation (Amazon Style)</option>
                        </select>
                    </div>
                    
                    <div class="input-group">
                        <label for="precision">🎯 Precision Level:</label>
                        <select id="precision" name="precision">
                            <option value="standard" <?php echo ($_POST['precision'] ?? '') == 'standard' ? 'selected' : ''; ?>>Standard</option>
                            <option value="high" <?php echo ($_POST['precision'] ?? '') == 'high' ? 'selected' : ''; ?>>High Precision</option>
                            <option value="scientific" <?php echo ($_POST['precision'] ?? '') == 'scientific' ? 'selected' : ''; ?>>Scientific Notation</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="tech-btn">🚀 Launch Calculation</button>
                </form>
            </div>
            
            <div class="results-center">
                <h2 class="results-title">📊 Calculation Results</h2>
                
                <?php
                $n = max(0, min(170, intval($_POST['number'] ?? 10)));
                $algorithm = $_POST['algorithm'] ?? 'iterative';
                $precision = $_POST['precision'] ?? 'standard';
                
                // Performance monitoring
                $start_time = microtime(true);
                $start_memory = memory_get_usage();
                
                // Factorial calculation functions
                function factorialIterative($n) {
                    if ($n < 0) return null;
                    if ($n <= 1) return 1;
                    
                    $result = 1;
                    for ($i = 2; $i <= $n; $i++) {
                        $result *= $i;
                    }
                    return $result;
                }
                
                function factorialRecursive($n) {
                    if ($n < 0) return null;
                    if ($n <= 1) return 1;
                    return $n * factorialRecursive($n - 1);
                }
                
                function factorialMemoized($n, &$memo = []) {
                    if ($n < 0) return null;
                    if ($n <= 1) return 1;
                    if (isset($memo[$n])) return $memo[$n];
                    
                    $memo[$n] = $n * factorialMemoized($n - 1, $memo);
                    return $memo[$n];
                }
                
                function stirlingApproximation($n) {
                    if ($n < 0) return null;
                    if ($n <= 1) return 1;
                    
                    // Stirling's approximation: n! ≈ √(2πn) * (n/e)^n
                    return sqrt(2 * M_PI * $n) * pow($n / M_E, $n);
                }
                
                // Calculate based on selected algorithm
                switch ($algorithm) {
                    case 'recursive':
                        $result = factorialRecursive($n);
                        $algo_name = "Recursive (Facebook Style)";
                        break;
                    case 'memoized':
                        $result = factorialMemoized($n);
                        $algo_name = "Memoized (Google Style)";
                        break;
                    case 'stirling':
                        $result = stirlingApproximation($n);
                        $algo_name = "Stirling Approximation (Amazon Style)";
                        break;
                    default:
                        $result = factorialIterative($n);
                        $algo_name = "Iterative (Tesla Style)";
                }
                
                // Performance metrics
                $execution_time = (microtime(true) - $start_time) * 1000;
                $memory_used = memory_get_usage() - $start_memory;
                
                // Format result based on precision
                function formatResult($result, $precision) {
                    if ($result === null) return "Error: Invalid input";
                    
                    switch ($precision) {
                        case 'scientific':
                            return sprintf("%.2e", $result);
                        case 'high':
                            return number_format($result, 2);
                        default:
                            return number_format($result);
                    }
                }
                
                $formatted_result = formatResult($result, $precision);
                ?>
                
                <div class="factorial-display">
                    <div class="factorial-number"><?php echo $formatted_result; ?></div>
                    <div class="factorial-formula"><?php echo $n; ?>! using <?php echo $algo_name; ?></div>
                </div>
                
                <div class="tech-metrics">
                    <div class="metric-card metric-tesla">
                        <span class="metric-value"><?php echo $n; ?></span>
                        <span class="metric-label">Input Number</span>
                    </div>
                    
                    <div class="metric-card metric-facebook">
                        <span class="metric-value"><?php echo number_format($execution_time, 2); ?>ms</span>
                        <span class="metric-label">Execution Time</span>
                    </div>
                    
                    <div class="metric-card metric-google">
                        <span class="metric-value"><?php echo number_format($memory_used); ?></span>
                        <span class="metric-label">Memory Used (bytes)</span>
                    </div>
                    
                    <div class="metric-card metric-amazon">
                        <span class="metric-value"><?php echo ucfirst($precision); ?></span>
                        <span class="metric-label">Precision Level</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="algorithm-showcase">
            <h2 class="showcase-title">🧠 Algorithm Showcase</h2>
            
            <div class="algorithm-grid">
                <div class="algorithm-card algo-iterative">
                    <h3 class="algo-title" style="color: var(--tesla-red);">🚗 Tesla Style - Iterative</h3>
                    <div class="algo-description">
                        Efficient, straightforward approach. Like Tesla's direct drive motors - no unnecessary complexity.
                    </div>
                    <div class="algo-code">
function factorial($n) {
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}
                    </div>
                </div>
                
                <div class="algorithm-card algo-recursive">
                    <h3 class="algo-title" style="color: var(--facebook-blue);">👥 Facebook Style - Recursive</h3>
                    <div class="algo-description">
                        Elegant mathematical definition. Like Facebook's social graph - each connection builds on others.
                    </div>
                    <div class="algo-code">
function factorial($n) {
    if ($n <= 1) return 1;
    return $n * factorial($n - 1);
}
                    </div>
                </div>
                
                <div class="algorithm-card algo-memoized">
                    <h3 class="algo-title" style="color: var(--google-blue);">🔍 Google Style - Memoized</h3>
                    <div class="algo-description">
                        Optimized with caching. Like Google's search - remember previous results for instant access.
                    </div>
                    <div class="algo-code">
function factorial($n, &$memo = []) {
    if ($n <= 1) return 1;
    if (isset($memo[$n])) return $memo[$n];
    return $memo[$n] = $n * factorial($n-1, $memo);
}
                    </div>
                </div>
                
                <div class="algorithm-card algo-stirling">
                    <h3 class="algo-title" style="color: var(--amazon-orange);">📦 Amazon Style - Stirling</h3>
                    <div class="algo-description">
                        Approximation for large numbers. Like Amazon's logistics - efficient estimation for massive scale.
                    </div>
                    <div class="algo-code">
function stirling($n) {
    return sqrt(2 * M_PI * $n) * 
           pow($n / M_E, $n);
}
                    </div>
                </div>
            </div>
        </div>
        
        <div class="ceo-insights">
            <h2 class="insights-title">💡 Tech Titans' Mathematical Insights</h2>
            
            <div class="insights-grid">
                <div class="insight-card">
                    <h3>🚀 Elon's Mars Math</h3>
                    <ul class="insight-list">
                        <li>Factorial calculations optimize rocket fuel efficiency</li>
                        <li>Permutation algorithms plan Mars colony layouts</li>
                        <li>Mathematical precision ensures safe space travel</li>
                        <li>Every calculation brings us closer to Mars</li>
                    </ul>
                </div>
                
                <div class="insight-card">
                    <h3>👨‍💻 Zuck's Scale Secrets</h3>
                    <ul class="insight-list">
                        <li>Factorial growth models predict user engagement</li>
                        <li>Combinatorial algorithms power friend suggestions</li>
                        <li>Mathematical optimization reduces server costs</li>
                        <li>Algorithms connect billions of people daily</li>
                    </ul>
                </div>
                
                <div class="insight-card">
                    <h3>💻 Gates' Software Wisdom</h3>
                    <ul class="insight-list">
                        <li>Mathematical foundations enable software innovation</li>
                        <li>Algorithmic thinking solves complex problems</li>
                        <li>Computational efficiency drives progress</li>
                        <li>Math education transforms societies</li>
                    </ul>
                </div>
                
                <div class="insight-card">
                    <h3>📦 Bezos' Customer Obsession</h3>
                    <ul class="insight-list">
                        <li>Factorial algorithms optimize delivery routes</li>
                        <li>Mathematical models predict customer behavior</li>
                        <li>Efficiency calculations reduce shipping costs</li>
                        <li>Data-driven decisions delight customers</li>
                    </ul>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 40px; font-size: 1.2em; opacity: 0.9;">
                <p>🌟 <strong>Remember:</strong> "The best way to predict the future is to invent it" - Alan Kay</p>
                <p style="margin-top: 15px; font-style: italic;">
                Every great tech company started with great mathematics. What will you build next?
                </p>
            </div>
        </div>
    </div>
    
    <script>
        // Real-time performance monitoring
        const startTime = performance.now();
        
        window.addEventListener('load', () => {
            const loadTime = performance.now() - startTime;
            console.log(`🚀 Page loaded in ${loadTime.toFixed(2)}ms - Tesla would be proud!`);
        });
        
        // Dynamic algorithm switching
        document.getElementById('algorithm').addEventListener('change', function() {
            const algorithm = this.value;
            const descriptions = {
                'iterative': '🚗 Tesla Style: Direct and efficient, like Autopilot algorithms',
                'recursive': '👥 Facebook Style: Elegant and mathematical, like social connections',
                'memoized': '🔍 Google Style: Optimized with caching, like search results',
                'stirling': '📦 Amazon Style: Approximation for scale, like logistics optimization'
            };
            
            // Show tooltip or update description
            console.log(descriptions[algorithm]);
        });
        
        // Keyboard shortcuts for tech titans
        document.addEventListener('keydown', (e) => {
            if (e.ctrlKey) {
                switch(e.key) {
                    case 'e': // Elon
                        document.getElementById('algorithm').value = 'iterative';
                        break;
                    case 'z': // Zuck
                        document.getElementById('algorithm').value = 'recursive';
                        break;
                    case 'g': // Gates/Google
                        document.getElementById('algorithm').value = 'memoized';
                        break;
                    case 'b': // Bezos
                        document.getElementById('algorithm').value = 'stirling';
                        break;
                }
            }
        });
        
        // Simulate real-time updates like a tech dashboard
        setInterval(() => {
            const metrics = document.querySelectorAll('.metric-card');
            metrics.forEach(metric => {
                if (Math.random() > 0.8) {
                    metric.style.transform = 'scale(1.05)';
                    setTimeout(() => {
                        metric.style.transform = 'scale(1)';
                    }, 200);
                }
            });
        }, 3000);
    </script>
</body>
</html>
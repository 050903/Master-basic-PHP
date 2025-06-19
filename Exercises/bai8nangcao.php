<?php
/**
 * Enterprise Mathematical Analysis Engine
 * Advanced Divisibility Calculator with Caching & Analytics
 * 
 * @author Senior PHP Developer (10+ years experience)
 * @version 3.2.1
 * @license MIT
 */

declare(strict_types=1);

// Autoloader simulation for enterprise structure
spl_autoload_register(function ($class) {
    // In real project: composer autoload
});

/**
 * Configuration Management
 */
class Config {
    private static array $config = [
        'cache_enabled' => true,
        'max_range' => 1000000,
        'performance_logging' => true,
        'api_rate_limit' => 100,
        'memory_limit' => '256M'
    ];
    
    public static function get(string $key, $default = null) {
        return self::$config[$key] ?? $default;
    }
}

/**
 * Simple Cache Implementation
 */
class Cache {
    private static array $store = [];
    
    public static function get(string $key) {
        return self::$store[$key] ?? null;
    }
    
    public static function set(string $key, $value, int $ttl = 3600): void {
        self::$store[$key] = [
            'data' => $value,
            'expires' => time() + $ttl
        ];
    }
    
    public static function has(string $key): bool {
        $item = self::$store[$key] ?? null;
        return $item && $item['expires'] > time();
    }
}

/**
 * Performance Monitor
 */
class PerformanceMonitor {
    private static array $metrics = [];
    
    public static function start(string $operation): void {
        self::$metrics[$operation] = [
            'start_time' => microtime(true),
            'start_memory' => memory_get_usage(true)
        ];
    }
    
    public static function end(string $operation): array {
        if (!isset(self::$metrics[$operation])) return [];
        
        $start = self::$metrics[$operation];
        return [
            'execution_time' => round((microtime(true) - $start['start_time']) * 1000, 2),
            'memory_used' => memory_get_usage(true) - $start['start_memory'],
            'peak_memory' => memory_get_peak_usage(true)
        ];
    }
}

/**
 * Mathematical Utilities
 */
class MathUtils {
    /**
     * Calculate GCD using Euclidean algorithm
     */
    public static function gcd(int $a, int $b): int {
        return $b === 0 ? $a : self::gcd($b, $a % $b);
    }
    
    /**
     * Check if number is prime
     */
    public static function isPrime(int $n): bool {
        if ($n < 2) return false;
        if ($n === 2) return true;
        if ($n % 2 === 0) return false;
        
        for ($i = 3; $i <= sqrt($n); $i += 2) {
            if ($n % $i === 0) return false;
        }
        return true;
    }
    
    /**
     * Generate Fibonacci sequence up to n terms
     */
    public static function fibonacci(int $n): array {
        if ($n <= 0) return [];
        if ($n === 1) return [0];
        
        $fib = [0, 1];
        for ($i = 2; $i < $n; $i++) {
            $fib[$i] = $fib[$i-1] + $fib[$i-2];
        }
        return $fib;
    }
}

/**
 * Advanced Divisibility Calculator
 */
class DivisibilityCalculator {
    private int $start;
    private int $end;
    private int $divisor;
    private array $results = [];
    
    public function __construct(int $start, int $end, int $divisor) {
        $this->validateInput($start, $end, $divisor);
        $this->start = $start;
        $this->end = $end;
        $this->divisor = $divisor;
    }
    
    private function validateInput(int $start, int $end, int $divisor): void {
        if ($start > $end) {
            throw new InvalidArgumentException("Start must be <= End");
        }
        if ($divisor <= 0) {
            throw new InvalidArgumentException("Divisor must be positive");
        }
        if (($end - $start) > Config::get('max_range')) {
            throw new InvalidArgumentException("Range too large");
        }
    }
    
    /**
     * Optimized calculation using mathematical formula
     */
    public function calculateOptimized(): array {
        PerformanceMonitor::start('optimized_calculation');
        
        $cacheKey = "divisible_{$this->start}_{$this->end}_{$this->divisor}";
        
        if (Cache::has($cacheKey)) {
            $this->results = Cache::get($cacheKey)['data'];
        } else {
            // Mathematical optimization: find first and last divisible numbers
            $firstDivisible = ceil($this->start / $this->divisor) * $this->divisor;
            $lastDivisible = floor($this->end / $this->divisor) * $this->divisor;
            
            $count = 0;
            $numbers = [];
            $sum = 0;
            
            if ($firstDivisible <= $this->end) {
                for ($i = $firstDivisible; $i <= $lastDivisible; $i += $this->divisor) {
                    $count++;
                    $numbers[] = $i;
                    $sum += $i;
                }
            }
            
            $this->results = [
                'count' => $count,
                'numbers' => $numbers,
                'sum' => $sum,
                'average' => $count > 0 ? $sum / $count : 0,
                'first' => $numbers[0] ?? null,
                'last' => end($numbers) ?: null
            ];
            
            Cache::set($cacheKey, $this->results);
        }
        
        $this->results['performance'] = PerformanceMonitor::end('optimized_calculation');
        return $this->results;
    }
    
    /**
     * Brute force calculation for comparison
     */
    public function calculateBruteForce(): array {
        PerformanceMonitor::start('brute_force');
        
        $count = 0;
        $numbers = [];
        $sum = 0;
        
        for ($i = $this->start; $i <= $this->end; $i++) {
            if ($i % $this->divisor === 0) {
                $count++;
                $numbers[] = $i;
                $sum += $i;
            }
        }
        
        $results = [
            'count' => $count,
            'numbers' => $numbers,
            'sum' => $sum,
            'average' => $count > 0 ? $sum / $count : 0,
            'performance' => PerformanceMonitor::end('brute_force')
        ];
        
        return $results;
    }
    
    /**
     * Advanced analytics
     */
    public function getAnalytics(): array {
        $range = $this->end - $this->start + 1;
        $expectedCount = floor($range / $this->divisor);
        $actualCount = $this->results['count'] ?? 0;
        
        return [
            'range_size' => $range,
            'divisor_info' => [
                'value' => $this->divisor,
                'is_prime' => MathUtils::isPrime($this->divisor),
                'factors' => $this->getFactors($this->divisor)
            ],
            'statistical_analysis' => [
                'expected_count' => $expectedCount,
                'actual_count' => $actualCount,
                'accuracy' => $expectedCount > 0 ? ($actualCount / $expectedCount) * 100 : 0,
                'density' => $range > 0 ? ($actualCount / $range) * 100 : 0
            ],
            'mathematical_properties' => [
                'arithmetic_progression' => true,
                'common_difference' => $this->divisor,
                'sum_formula' => "n/2 * (first + last)"
            ]
        ];
    }
    
    private function getFactors(int $n): array {
        $factors = [];
        for ($i = 1; $i <= sqrt($n); $i++) {
            if ($n % $i === 0) {
                $factors[] = $i;
                if ($i !== $n / $i) {
                    $factors[] = $n / $i;
                }
            }
        }
        sort($factors);
        return $factors;
    }
}

/**
 * Data Visualization Helper
 */
class DataVisualizer {
    public static function generateChart(array $data, string $type = 'bar'): string {
        // In real project: integrate with Chart.js or similar
        $max = max($data);
        $html = "<div class='chart-container'>";
        
        foreach ($data as $label => $value) {
            $percentage = $max > 0 ? ($value / $max) * 100 : 0;
            $html .= "<div class='chart-bar'>";
            $html .= "<div class='bar-fill' style='width: {$percentage}%'></div>";
            $html .= "<span class='bar-label'>{$label}: {$value}</span>";
            $html .= "</div>";
        }
        
        $html .= "</div>";
        return $html;
    }
}

/**
 * API Response Handler
 */
class ApiResponse {
    public static function json(array $data, int $status = 200): void {
        http_response_code($status);
        header('Content-Type: application/json');
        echo json_encode($data, JSON_PRETTY_PRINT);
        exit;
    }
}

// Handle API requests
if (isset($_GET['api']) && $_GET['api'] === '1') {
    try {
        $start = (int)($_GET['start'] ?? 2839);
        $end = (int)($_GET['end'] ?? 7827);
        $divisor = (int)($_GET['divisor'] ?? 13);
        
        $calculator = new DivisibilityCalculator($start, $end, $divisor);
        $results = $calculator->calculateOptimized();
        $analytics = $calculator->getAnalytics();
        
        ApiResponse::json([
            'success' => true,
            'data' => $results,
            'analytics' => $analytics,
            'timestamp' => date('c')
        ]);
    } catch (Exception $e) {
        ApiResponse::json([
            'success' => false,
            'error' => $e->getMessage()
        ], 400);
    }
}

// Main application logic
$start = (int)($_POST['start'] ?? $_GET['start'] ?? 2839);
$end = (int)($_POST['end'] ?? $_GET['end'] ?? 7827);
$divisor = (int)($_POST['divisor'] ?? $_GET['divisor'] ?? 13);
$algorithm = $_POST['algorithm'] ?? 'optimized';

$calculator = new DivisibilityCalculator($start, $end, $divisor);
$results = $algorithm === 'brute_force' ? 
    $calculator->calculateBruteForce() : 
    $calculator->calculateOptimized();
$analytics = $calculator->getAnalytics();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🧮 Enterprise Mathematical Analysis Engine</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Inter:wght@300;400;600;700&display=swap');
        
        :root {
            --primary: #2563eb;
            --secondary: #7c3aed;
            --success: #059669;
            --warning: #d97706;
            --danger: #dc2626;
            --dark: #1f2937;
            --light: #f8fafc;
            --border: #e5e7eb;
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
            color: var(--dark);
        }
        
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .header {
            text-align: center;
            color: white;
            margin-bottom: 40px;
        }
        
        .header h1 {
            font-size: 3.5em;
            font-weight: 700;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .header .subtitle {
            font-size: 1.2em;
            opacity: 0.9;
        }
        
        .dashboard {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 30px;
            margin-bottom: 30px;
        }
        
        .control-panel {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .control-panel h2 {
            margin-bottom: 25px;
            color: var(--primary);
            font-size: 1.5em;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark);
        }
        
        .form-group input, .form-group select {
            width: 100%;
            padding: 12px;
            border: 2px solid var(--border);
            border-radius: 8px;
            font-family: 'JetBrains Mono', monospace;
            font-size: 14px;
            transition: all 0.3s;
        }
        
        .form-group input:focus, .form-group select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(37,99,235,0.1);
        }
        
        .btn {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            width: 100%;
            margin-top: 10px;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(37,99,235,0.3);
        }
        
        .results-panel {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .metric-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .metric-card {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 25px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .metric-value {
            font-size: 2.5em;
            font-weight: 700;
            font-family: 'JetBrains Mono', monospace;
            margin-bottom: 5px;
        }
        
        .metric-label {
            font-size: 0.9em;
            opacity: 0.9;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .analytics-section {
            background: white;
            border-radius: 20px;
            padding: 30px;
            margin-top: 30px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .analytics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 20px;
        }
        
        .analytics-card {
            border: 2px solid var(--border);
            border-radius: 15px;
            padding: 25px;
            transition: all 0.3s;
        }
        
        .analytics-card:hover {
            border-color: var(--primary);
            box-shadow: 0 10px 25px rgba(37,99,235,0.1);
        }
        
        .analytics-card h3 {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 1.3em;
        }
        
        .stat-row {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
            padding: 8px 0;
            border-bottom: 1px solid var(--border);
        }
        
        .stat-row:last-child {
            border-bottom: none;
        }
        
        .performance-badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8em;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .badge-success { background: var(--success); color: white; }
        .badge-warning { background: var(--warning); color: white; }
        .badge-danger { background: var(--danger); color: white; }
        
        .code-block {
            background: var(--dark);
            color: #a3a3a3;
            padding: 20px;
            border-radius: 10px;
            font-family: 'JetBrains Mono', monospace;
            font-size: 14px;
            overflow-x: auto;
            margin: 15px 0;
        }
        
        .numbers-display {
            max-height: 200px;
            overflow-y: auto;
            background: #f8fafc;
            border: 2px solid var(--border);
            border-radius: 10px;
            padding: 15px;
            font-family: 'JetBrains Mono', monospace;
            font-size: 14px;
            line-height: 1.6;
        }
        
        .api-section {
            background: var(--dark);
            color: white;
            border-radius: 20px;
            padding: 30px;
            margin-top: 30px;
        }
        
        .api-endpoint {
            background: rgba(255,255,255,0.1);
            padding: 15px;
            border-radius: 8px;
            font-family: 'JetBrains Mono', monospace;
            margin: 10px 0;
        }
        
        @media (max-width: 768px) {
            .dashboard {
                grid-template-columns: 1fr;
            }
            
            .header h1 {
                font-size: 2.5em;
            }
            
            .metric-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🧮 Enterprise Mathematical Analysis Engine</h1>
            <div class="subtitle">Advanced Divisibility Calculator with Performance Analytics</div>
        </div>
        
        <div class="dashboard">
            <div class="control-panel">
                <h2>⚙️ Configuration Panel</h2>
                <form method="POST">
                    <div class="form-group">
                        <label for="start">Start Range:</label>
                        <input type="number" id="start" name="start" value="<?= $start ?>" min="1" max="999999">
                    </div>
                    
                    <div class="form-group">
                        <label for="end">End Range:</label>
                        <input type="number" id="end" name="end" value="<?= $end ?>" min="1" max="999999">
                    </div>
                    
                    <div class="form-group">
                        <label for="divisor">Divisor:</label>
                        <input type="number" id="divisor" name="divisor" value="<?= $divisor ?>" min="1" max="1000">
                    </div>
                    
                    <div class="form-group">
                        <label for="algorithm">Algorithm:</label>
                        <select id="algorithm" name="algorithm">
                            <option value="optimized" <?= $algorithm === 'optimized' ? 'selected' : '' ?>>Optimized (O(n/k))</option>
                            <option value="brute_force" <?= $algorithm === 'brute_force' ? 'selected' : '' ?>>Brute Force (O(n))</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn">🚀 Calculate</button>
                </form>
                
                <div style="margin-top: 20px; padding-top: 20px; border-top: 2px solid var(--border);">
                    <h3>📊 Quick Stats</h3>
                    <div class="stat-row">
                        <span>Range Size:</span>
                        <strong><?= number_format($end - $start + 1) ?></strong>
                    </div>
                    <div class="stat-row">
                        <span>Cache Status:</span>
                        <span class="performance-badge badge-success">Enabled</span>
                    </div>
                    <div class="stat-row">
                        <span>Memory Usage:</span>
                        <strong><?= round(memory_get_usage(true) / 1024 / 1024, 2) ?>MB</strong>
                    </div>
                </div>
            </div>
            
            <div class="results-panel">
                <h2>📈 Calculation Results</h2>
                
                <div class="metric-grid">
                    <div class="metric-card">
                        <div class="metric-value"><?= number_format($results['count']) ?></div>
                        <div class="metric-label">Total Count</div>
                    </div>
                    
                    <div class="metric-card">
                        <div class="metric-value"><?= number_format($results['sum']) ?></div>
                        <div class="metric-label">Sum</div>
                    </div>
                    
                    <div class="metric-card">
                        <div class="metric-value"><?= number_format($results['average'], 2) ?></div>
                        <div class="metric-label">Average</div>
                    </div>
                    
                    <div class="metric-card">
                        <div class="metric-value"><?= $results['performance']['execution_time'] ?>ms</div>
                        <div class="metric-label">Execution Time</div>
                    </div>
                </div>
                
                <?php if (!empty($results['numbers']) && count($results['numbers']) <= 100): ?>
                <h3>🔢 Found Numbers</h3>
                <div class="numbers-display">
                    <?= implode(', ', array_slice($results['numbers'], 0, 100)) ?>
                    <?php if (count($results['numbers']) > 100): ?>
                        <br><em>... and <?= count($results['numbers']) - 100 ?> more</em>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="analytics-section">
            <h2>🔬 Advanced Analytics</h2>
            
            <div class="analytics-grid">
                <div class="analytics-card">
                    <h3>📊 Statistical Analysis</h3>
                    <div class="stat-row">
                        <span>Expected Count:</span>
                        <strong><?= number_format($analytics['statistical_analysis']['expected_count']) ?></strong>
                    </div>
                    <div class="stat-row">
                        <span>Actual Count:</span>
                        <strong><?= number_format($analytics['statistical_analysis']['actual_count']) ?></strong>
                    </div>
                    <div class="stat-row">
                        <span>Accuracy:</span>
                        <strong><?= number_format($analytics['statistical_analysis']['accuracy'], 2) ?>%</strong>
                    </div>
                    <div class="stat-row">
                        <span>Density:</span>
                        <strong><?= number_format($analytics['statistical_analysis']['density'], 4) ?>%</strong>
                    </div>
                </div>
                
                <div class="analytics-card">
                    <h3>🔢 Divisor Properties</h3>
                    <div class="stat-row">
                        <span>Value:</span>
                        <strong><?= $analytics['divisor_info']['value'] ?></strong>
                    </div>
                    <div class="stat-row">
                        <span>Is Prime:</span>
                        <span class="performance-badge <?= $analytics['divisor_info']['is_prime'] ? 'badge-success' : 'badge-warning' ?>">
                            <?= $analytics['divisor_info']['is_prime'] ? 'Yes' : 'No' ?>
                        </span>
                    </div>
                    <div class="stat-row">
                        <span>Factors:</span>
                        <strong><?= implode(', ', $analytics['divisor_info']['factors']) ?></strong>
                    </div>
                </div>
                
                <div class="analytics-card">
                    <h3>⚡ Performance Metrics</h3>
                    <div class="stat-row">
                        <span>Algorithm:</span>
                        <strong><?= ucfirst($algorithm) ?></strong>
                    </div>
                    <div class="stat-row">
                        <span>Execution Time:</span>
                        <strong><?= $results['performance']['execution_time'] ?>ms</strong>
                    </div>
                    <div class="stat-row">
                        <span>Memory Used:</span>
                        <strong><?= number_format($results['performance']['memory_used']) ?> bytes</strong>
                    </div>
                    <div class="stat-row">
                        <span>Peak Memory:</span>
                        <strong><?= number_format($results['performance']['peak_memory'] / 1024 / 1024, 2) ?>MB</strong>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="api-section">
            <h2>🔌 API Integration</h2>
            <p>Access this calculator programmatically via REST API:</p>
            
            <div class="api-endpoint">
                <strong>GET</strong> <?= $_SERVER['REQUEST_URI'] ?>?api=1&start=<?= $start ?>&end=<?= $end ?>&divisor=<?= $divisor ?>
            </div>
            
            <div class="code-block">
{
  "success": true,
  "data": {
    "count": <?= $results['count'] ?>,
    "sum": <?= $results['sum'] ?>,
    "average": <?= $results['average'] ?>,
    "performance": {
      "execution_time": "<?= $results['performance']['execution_time'] ?>ms"
    }
  },
  "analytics": { ... },
  "timestamp": "<?= date('c') ?>"
}
            </div>
        </div>
    </div>
    
    <script>
        // Real-time performance monitoring
        const performanceObserver = new PerformanceObserver((list) => {
            for (const entry of list.getEntries()) {
                console.log(`${entry.name}: ${entry.duration}ms`);
            }
        });
        performanceObserver.observe({entryTypes: ['measure', 'navigation']});
        
        // Auto-refresh for long calculations
        if (<?= ($end - $start) ?> > 100000) {
            console.log('Large calculation detected - monitoring performance...');
        }
        
        // API testing function
        function testAPI() {
            const url = `${window.location.href}?api=1&start=<?= $start ?>&end=<?= $end ?>&divisor=<?= $divisor ?>`;
            fetch(url)
                .then(response => response.json())
                .then(data => console.log('API Response:', data))
                .catch(error => console.error('API Error:', error));
        }
        
        // Keyboard shortcuts
        document.addEventListener('keydown', (e) => {
            if (e.ctrlKey && e.key === 'Enter') {
                document.querySelector('form').submit();
            }
        });
    </script>
</body>
</html>
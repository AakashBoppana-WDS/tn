<?php

declare(strict_types=1);

function env(string $key, ?string $default = null): ?string
{
    static $vars = null;
    if ($vars === null) {
        $vars = [];
        $file = dirname(__DIR__) . '/.env';
        if (file_exists($file)) {
            foreach (file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
                if (str_starts_with(trim($line), '#') || !str_contains($line, '=')) {
                    continue;
                }
                [$k, $v] = explode('=', $line, 2);
                $vars[trim($k)] = trim($v, "\" '");
            }
        }
    }

    return $_ENV[$key] ?? $_SERVER[$key] ?? $vars[$key] ?? $default;
}

return [
    'app_name' => env('APP_NAME', 'Vizag Florist'),
    'app_url' => env('APP_URL', 'http://localhost'),
    'db' => [
        'host' => env('DB_HOST', '127.0.0.1'),
        'port' => env('DB_PORT', '3306'),
        'name' => env('DB_NAME', 'vizag_florist'),
        'user' => env('DB_USER', 'root'),
        'pass' => env('DB_PASS', ''),
    ],
    'session_name' => env('SESSION_NAME', 'vizag_florist_session'),
    'razorpay' => [
        'key_id' => env('RAZORPAY_KEY_ID', ''),
        'key_secret' => env('RAZORPAY_KEY_SECRET', ''),
    ],
    'delivery_default_charge' => (float) env('DELIVERY_DEFAULT_CHARGE', '49'),
];

<?php
$uri = $_SERVER['REQUEST_URI'];

if ($uri == '/health') {
    echo "Status: Healthy";
} elseif (preg_match('/^\/echo\/(.+)/', $uri, $matches)) {
    echo "You said: " . $matches[1];
} elseif ($uri == '/date') {
    echo date('Y-m-d H:i:s');
} else {
    echo "Welcome! Endpoints: /health, /echo/{msg}, /date";
}
?>

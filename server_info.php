<?php
header('Content-Type: application/json');

$server_info = [
    'server' => $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown',
    'php_version' => phpversion(),
    'server_time' => date('Y-m-d H:i:s'),
    'server_ip' => $_SERVER['SERVER_ADDR'] ?? gethostbyname(gethostname()),
    'hostname' => gethostname(),
    'client_ip' => $_SERVER['REMOTE_ADDR'] ?? 'Unknown',
    'server_port' => $_SERVER['SERVER_PORT'] ?? 'Unknown'
];

echo json_encode($server_info);
?>
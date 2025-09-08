<?php
header('Content-Type: application/json');

$server_info = [
    'server' => $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown',
    'php_version' => phpversion(),
    'server_time' => date('Y-m-d H:i:s')
];

echo json_encode($server_info);
?>
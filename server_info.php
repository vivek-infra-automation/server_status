<?php
header('Content-Type: application/json');

$server_info = [
    // Basic server info
    'server' => $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown',
    'php_version' => phpversion(),
    'server_time' => date('Y-m-d H:i:s'),
    'server_ip' => $_SERVER['SERVER_ADDR'] ?? gethostbyname(gethostname()),
    'hostname' => gethostname(),
    'client_ip' => $_SERVER['REMOTE_ADDR'] ?? 'Unknown',
    'server_port' => $_SERVER['SERVER_PORT'] ?? 'Unknown',
    
    // System information
    'os' => php_uname('s r'),
    'memory_usage' => round(memory_get_usage(true) / 1024 / 1024, 2) . ' MB',
    'memory_peak' => round(memory_get_peak_usage(true) / 1024 / 1024, 2) . ' MB',
    'disk_free' => round(disk_free_space('.') / 1024 / 1024 / 1024, 2) . ' GB',
    'disk_total' => round(disk_total_space('.') / 1024 / 1024 / 1024, 2) . ' GB',
    
    // PHP configuration
    'memory_limit' => ini_get('memory_limit'),
    'max_execution_time' => ini_get('max_execution_time') . 's',
    'upload_max_filesize' => ini_get('upload_max_filesize'),
    'timezone' => date_default_timezone_get(),
    
    // Network information
    'request_method' => $_SERVER['REQUEST_METHOD'] ?? 'Unknown',
    'request_uri' => $_SERVER['REQUEST_URI'] ?? 'Unknown',
    'query_string' => $_SERVER['QUERY_STRING'] ?? '',
    'https' => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'Yes' : 'No',
    'server_protocol' => $_SERVER['SERVER_PROTOCOL'] ?? 'Unknown',
    'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown',
    'document_root' => $_SERVER['DOCUMENT_ROOT'] ?? 'Unknown',
    'server_name' => $_SERVER['SERVER_NAME'] ?? 'Unknown',
    
    // Performance metrics
    'load_average' => function_exists('sys_getloadavg') ? implode(', ', sys_getloadavg()) : 'N/A'
];

echo json_encode($server_info, JSON_PRETTY_PRINT);
?>
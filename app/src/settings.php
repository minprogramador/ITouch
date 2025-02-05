<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'Itouch',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app_'. date("Y-m-d").'.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];

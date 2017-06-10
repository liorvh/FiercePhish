<?php

return [
    'APP_ENV' => env('APP_ENV', 'master'),
    'APP_DEBUG' => env('APP_DEBUG', false),
    'APP_LOG_LEVEL' => env('APP_LOG_LEVEL', 'debug'),
    'APP_TIMEZONE' => env('APP_TIMEZONE', 'America/Chicago'),
    'APP_KEY' => env('APP_KEY', 'SomeRandomString'),
    'APP_URL' => env('APP_URL', 'http://localhost'),
    'APP_NAME' => env('APP_NAME', 'FiercePhish'),
    'PROXY_URL' => env('PROXY_URL', null),
    'PROXY_SCHEMA' => env('PROXY_SCHEMA', null),
    'DB_CONNECTION' => env('DB_CONNECTION', 'mysql'),
    'DB_HOST' => env('DB_HOST', '127.0.0.1'),
    'DB_PORT' => env('DB_PORT', '3306'),
    'DB_USERNAME' => env('DB_USERNAME', 'root'),
    'DB_PASSWORD' => env('DB_PASSWORD', 'secret'),
    'DB_DATABASE' => env('DB_DATABASE', 'fiercephish'),
    'CACHE_DRIVER' => env('CACHE_DRIVER', 'file'),
    'SESSION_DRIVER' => env('SESSION_DRIVER', 'file'),
    'BROADCAST_DRIVER' => env('BROADCAST_DRIVER', 'log'),
    'QUEUE_DRIVER' => env('QUEUE_DRIVER', 'database'),
    'REDIS_HOST' => env('REDIS_HOST', '127.0.0.1'),
    'REDIS_PASSWORD' => env('REDIS_PASSWORD', null),
    'REDIS_PORT' => env('REDIS_PORT', '6379'),
    'PUSHER_APP_ID' => env('PUSHER_APP_ID', null),
    'PUSHER_KEY' => env('PUSHER_KEY', null),
    'PUSHER_SECRET' => env('PUSHER_SECRET', null),
    'MAIL_DRIVER' => env('MAIL_DRIVER', 'smtp'),
    'MAIL_HOST' => env('MAIL_HOST', '127.0.0.1'),
    'MAIL_PORT' => env('MAIL_PORT', '25'),
    'MAIL_USERNAME' => env('MAIL_USERNAME', null),
    'MAIL_PASSWORD' => env('MAIL_PASSWORD', null),
    'MAIL_ENCRYPTION' => env('MAIL_ENCRYPTION', null),
    'MAILGUN_DOMAIN' => env('MAILGUN_DOMAIN', null),
    'MAILGUN_SECRET' => env('MAILGUN_SECRET', null),
    'URI_PREFIX' => env('URI_PREFIX', null),
    'TEST_EMAIL_JOB' => env('TEST_EMAIL_JOB', false),
    'IMAP_HOST' => env('IMAP_HOST', null),
    'IMAP_PORT' => env('IMAP_PORT', '143'),
    'IMAP_USERNAME' => env('IMAP_USERNAME', 'fiercephish'),
    'IMAP_PASSWORD' => env('IMAP_PASSWORD', null),
    'MAIL_BCC_ALL' => env('MAIL_BCC_ALL', null),
    'NOTIFICATIONS_FROM' => env('NOTIFICATIONS_FROM', 'alert@fiercephish.com'),
    'NOTIFICATIONS_LOGIN_LINK' => env('NOTIFICATIONS_LOGIN_LINK', false),
    'ANALYTICS' => env('ANALYTICS', true),
];

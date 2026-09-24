<?php

require_once __DIR__ . '/../Config/environment.php';

function app_database_connection(): mysqli
{
    static $connection;

    if ($connection instanceof mysqli) {
        return $connection;
    }

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $connection = new mysqli(
        app_environment_value('DB_HOST', '127.0.0.1'),
        app_environment_value('DB_USER', 'root'),
        app_environment_value('DB_PASSWORD'),
        app_environment_value('DB_NAME', 'junglebook'),
        (int) app_environment_value('DB_PORT', '3306')
    );
    $connection->set_charset('utf8mb4');

    return $connection;
}
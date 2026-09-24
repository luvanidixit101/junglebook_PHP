<?php

function app_environment_value(string $key, string $default = ''): string
{
    $value = getenv($key);

    return $value === false ? $default : $value;
}
<?php
function maskEmail($email)
{
    $parts = explode("@", $email);
    $name = $parts[0];
    $domain = $parts[1];

    $maskedName = str_repeat('*', strlen($name) - 2) . substr($name, -2);

    return $maskedName . '@' . $domain;
}

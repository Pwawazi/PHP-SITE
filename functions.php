<?php

declare(strict_types=1);

/**
 * Die Dump function
 *
 * @param [string] $value
 * @return void
 */
function dd($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

/**
 * Get URI of the request
 *
 * @param [string] $value
 * @return string
 */
function urlIs(string $value) :bool{
    return $_SERVER['REQUEST_URI'] == $value;
}

/**
 * Page not found code snippet
 *
 * @param integer $code
 * @return void
 */
function abort(int $code = 404) :void{
    http_response_code($code);
    require "views/{$code}.php";
    die();
}
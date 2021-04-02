<?php


function redirectError($code)
{
    switch ($code) {
        case 401:
            {
                header("Location: login", true, 401);
            }
            break;
        case 301:
            {
                header("Location: login", true, $code);
            }
            break;
    }
}

function redirect($code, $url)
{
    switch ($code) {
        case 301:
            {
                header("Location: $url", true, $code);
            }
            break;
    }
}


function server($key)
{
    return $_SERVER[$key];
}



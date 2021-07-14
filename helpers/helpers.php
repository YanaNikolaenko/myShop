<?php


    function config(string $params): string
    {
        $segments = explode('.', $params);

        $filename = 'config\\' . array_shift($segments) . '.php';
        $db_params = include($filename);

        function check($keys, $check): string
        {
            $value = '';
            $key = array_shift($keys);
            if (!is_array($check[$key])) {
                $value = $check[$key];
                return $value;
            } else {
                $array = $check[$key];
                return check($keys, $array);
            }
        }

        return check($segments, $db_params);
    }

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


<?php


function redirectError($code)
{
    switch ($code) {
        case 403:
            {
                header("location: " . ACCESSDENIED, false, $code);
            }
            break;
    }
}



//function redirect($url, $code)
//{
//   //TODO :: доделать локигу
//
//}
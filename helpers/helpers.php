<?php


function redirectError($code)
{
    switch ($code) {
        case 401:
            {
                header("Location: access-denied", false, $code);
                echo "редирект";
            }
            break;
    }
}



//function redirect($url, $code)
//{
//   //TODO :: доделать локигу
//
//}
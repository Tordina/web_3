<?php

echo preg_replace_callback('#(\d+)#', 'cube', 'a1b2c3');
function cube($matches)
{
    $result = pow($matches[0], 3);
    return $result;
}
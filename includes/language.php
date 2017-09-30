<?php

function ru()
{
    if (isset($_COOKIE['matlas-lang'])) {
        if ($_COOKIE['matlas-lang'] == 'en') {
            return false;
        } else {
            return true;
        }
    } else {
        return true;
    }
}

?>
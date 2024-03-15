<?php

function auth()
{
    // check user login (true or fasle)
    if (isset($_SESSION['user_id'])) {

        return true;

    } else {
        return false;
    }
}

?>
<?php
function filter($users_arr)
{
    foreach ($users_arr as $key => $user) {
        if (strlen($user["pass"]) < 8) {
            unset($users_arr[$key]);
        }
    }
    return $users_arr;
}
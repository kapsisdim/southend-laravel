<?php

use App\Models\User;

function userExists($mail)
{
    return User::where('email', $mail);
}
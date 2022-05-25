<?php

use App\Core\Role;

function dd($data): void
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}
//fonction pour cacher ce que rp ou ac ou etudiant etc peucent voirs
function shownav(array $exceptUsers)
{
    foreach ($exceptUsers as $user) {
        if (Role::getRole() == $user) {
            return 'hidden';
        }
    }
    return '';
}
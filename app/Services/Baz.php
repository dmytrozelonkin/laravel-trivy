<?php

namespace App\Services;

use App\Models\User;

class Baz
{
    public function doSomething(int $id, string $email)
    {
        /** @var User $user */
        $user = User::where('id', $id)->first();
        $user->email = $email;
        $user->save();

        return $user;
    }
}

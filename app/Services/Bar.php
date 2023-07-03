<?php

namespace App\Services;

use App\Models\User;

class Bar
{
    public function doSomething(int $id, string $email)
    {
        /** @var User $user */
        $user = User::where('id', $id)->first();
        $user->email
            = $email;
        $user->save();

        return $user;
    }

    public function do_nothing($foo = 'foo')
    {
        //
    }
}

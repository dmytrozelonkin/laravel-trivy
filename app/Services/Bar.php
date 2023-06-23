<?php

namespace App\Services;

class Bar
{
    public function doSomething(int $id, string $email)
    {
        $user = \App\Models\User::where('id', $id)->first();
        $user->email = 'new@mail.com';
        $user->save();

        return $user;
    }
}

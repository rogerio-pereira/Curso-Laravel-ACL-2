<?php

namespace App\Policies;

use App\User;
use App\Book;
use Illuminate\Auth\Access\HandlesAuthorization;

class BookPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Book $book)
    {
        return $user->id == $book->user_id;
    }

    public function before(User $user, $hability)
    {
        if($user->admin)
            return true;
    }
}

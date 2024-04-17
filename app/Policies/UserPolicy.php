<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function viewAll(User $user)
    {
        return $user->isAdmin();
    }
    public function view(User $user, User $lessor)
    {
        return $user->id === $lessor->id || $user->isAdmin();
    }

    public function update(User $user, User $lessor)
    {
        return $user->id === $lessor->id || $user->isAdmin();
    }

    public function create(User $user)
    {
        return $user->isAdmin();
    }

    public function delete(User $user, User $lessor)
    {
        return $user->isAdmin();
    }
}

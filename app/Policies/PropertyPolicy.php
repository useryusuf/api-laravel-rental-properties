<?php

namespace App\Policies;

use App\Models\Property;
use App\Models\User;

class PropertyPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }


    public function update(User $user, Property $property)
    {

        return $user->id === $property->user_id || $user->isAdmin();
    }

    public function delete(User $user, Property $property)
    {
        return $user->id === $property->user_id || $user->isAdmin();
    }
}

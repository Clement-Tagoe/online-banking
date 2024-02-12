<?php

namespace App\Policies;

use App\Models\User;

class TransactionPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user): bool
    {
        return $user->role == 'administrator';
    }
}

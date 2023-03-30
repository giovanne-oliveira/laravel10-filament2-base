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

    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('view_any_user');
    }

    public function view(User $user): bool
    {
        return $user->hasPermissionTo('view_user');
    }

    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create_user');
    }

    public function update(User $user): bool
    {
        return $user->hasPermissionTo('update_user');
    }

    public function delete(User $user): bool
    {
        return $user->hasPermissionTo('delete_user');
    }

    public function restore(User $user): bool
    {
        return $user->hasPermissionTo('restore_user');
    }

    public function forceDelete(User $user): bool
    {
        return $user->hasPermissionTo('force_delete_user');
    }
}

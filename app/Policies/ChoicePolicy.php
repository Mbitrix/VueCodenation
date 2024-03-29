<?php

namespace App\Policies;

use App\Models\Choice;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChoicePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
        return $user->can('View Choice');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Choice  $choice
     * @return mixed
     */
    public function view(User $user, Choice $choice)
    {
        //
        return $user->can('View Choice');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return $user->can('Create Choice');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Choice  $choice
     * @return mixed
     */
    public function update(User $user, Choice $choice)
    {
        //
        return $user->can('Update Choice');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Choice  $choice
     * @return mixed
     */
    public function delete(User $user, Choice $choice)
    {
        //
        return $user->can('Delete Choice');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Choice  $choice
     * @return mixed
     */
    public function restore(User $user, Choice $choice)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Choice  $choice
     * @return mixed
     */
    public function forceDelete(User $user, Choice $choice)
    {
        //
    }
}

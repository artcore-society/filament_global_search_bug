<?php

namespace App\Policies;

use App\Models\Serie;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SeriePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Serie $serie)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Serie $serie)
    {
        return true;
    }

    public function delete(User $user, Serie $serie)
    {
        return true;
    }

    public function restore(User $user, Serie $serie)
    {
        return true;
    }

    public function forceDelete(User $user, Serie $serie)
    {
        return true;
    }
}

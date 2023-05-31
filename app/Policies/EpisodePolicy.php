<?php

namespace App\Policies;

use App\Models\Episode;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EpisodePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return false;
    }

    public function view(User $user, Episode $episode)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Episode $episode)
    {
        return true;
    }

    public function delete(User $user, Episode $episode)
    {
        return true;
    }

    public function restore(User $user, Episode $episode)
    {
        return true;
    }

    public function forceDelete(User $user, Episode $episode)
    {
        return true;
    }
}

<?php

namespace App\Policies;

use App\Models\Script;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ScriptPolicy
{

    use HandlesAuthorization;


    public function delete(User $user, Script $script): Response
    {
        return $user->id === $script->user_id
            ? Response::allow()
            : Response::deny('Nejste vlastníkem tohoto scénáře.');
    }

    public function forceDelete(User $user, Script $script): Response
    {
        return $user->id === $script->user_id
            ? Response::allow()
            : Response::deny('Nejste vlastníkem tohoto scénáře.');
    }

    public function restore(User $user, Script $script): Response
    {
        return $user->id === $script->user_id
            ? Response::allow()
            : Response::deny('Nejste vlastníkem tohoto scénáře.');
    }

    public function update(User $user, Script $script): Response
    {
        return $user->id === $script->user_id
            ? Response::allow()
            : Response::deny('Nejste vlastníkem tohoto scénáře.');
    }

    public function view(User $user, Script $script): Response
    {
        return $user->id === $script->user_id
            ? Response::allow()
            : Response::deny('Nemáš oprávnění prohlížet tento scénář.');
    }
}

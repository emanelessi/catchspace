<?php


namespace App\Policies;


use App\Models\Role;
use App\Models\User;
use App\Models\WorkSpace;
use Illuminate\Auth\Access\HandlesAuthorization;

class TestPolicies
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        return $user->user_level_id == Role::Is_Test;
    }

    public function update(User $user, WorkSpace $workSpace)
    {
        return in_array($user->user_level_id, [Role::Is_Test, Role::Is_Super_Admin]) || ($workSpace->user_id == auth()->id());
//        return $user->role_id == Role::Is_Test;
    }

    public function delete(User $user)
    {
        return $user->user_level_id == Role::Is_Test;
    }


}

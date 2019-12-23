<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Status;
use Illuminate\Auth\Access\HandlesAuthorization;

class StatusPolicy
{
    use HandlesAuthorization;

    //删除策略， 本人操作可删除
    public function destroy(User $user, Status $status)
    {
        return $user->id === $status->user_id;
    }
}

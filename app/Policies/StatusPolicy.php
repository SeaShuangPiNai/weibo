<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;
use App\Models\Status;

//之前我们已经在AuthServiceProvider中设置了"授权策略自动注册"，所以这里不需要做任何处理StatusPolicy将会被自动识别
class StatusPolicy
{
    use HandlesAuthorization;

    public function destroy(User $user, Status $status)
    {
        return $user->id === $status->user_id;
    }
}

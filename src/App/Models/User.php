<?php

namespace Lvcmf\Admin\App\Models;

use Auth;
use Lvcmf\Core\App\Models\User as CoreUser;

class User extends CoreUser
{
    /**
     * 后台登录 login
     */
    public function login($credentials)
    {
        if ($token = $this->attemptToken($credentials)) {
            $user = Auth::user();
            return [
                'status' => 200,
                'message' => '登录成功',
                'value' => [
                    'token' => $token,
                    'redirect' => '/admin',
                    'user' => [
                        'id' => $user->id,
                        'name' => $user->name,
                        'email' => $user->email,
                    ]
                ]
            ];
        } else {
            abort(401.1, '登录失败');
        }
    }
}

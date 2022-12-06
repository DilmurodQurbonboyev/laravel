<?php

namespace App\Services\User;

use App\Models\User;
use App\Repositories\User\UserRepository;

class UserService
{
    public function __construct(private UserRepository $userRepository){}

    public function create($request): User
    {
        $user = User::create(
            $request['user_id'],
            $request['email'],
            $request['pin'],
        );
        $this->userRepository->save($user);
        return $user;
    }
}

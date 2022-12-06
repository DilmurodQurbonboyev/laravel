<?php

namespace App\Services\User;

use App\Models\UserData;
use App\Repositories\User\UserDataRepository;

class UserDataService
{
    public function __construct(private UserDataRepository $userDataRepository) {}

    public function create($request, $user): UserData
    {
        return $this->userDataRepository->save($request, $user);
    }
}

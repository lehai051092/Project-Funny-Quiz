<?php


namespace App\Http\Services\Impl;


use App\Http\Repositories\Eloquent\UserReponsitoryEloquent;
use App\Http\Services\UserServiceInterface;

class UserServiceImpl implements UserServiceInterface
{
    protected $userRespository;

    public function __construct(UserReponsitoryEloquent $userRespository)
    {
        $this->userRespository = $userRespository;
    }


    function findById($id)
    {
        return $this->userRespository->findById($id);
    }

    function update($request, $id)
    {
        $user = $this->userRespository->findById($id);
        $user->name = $request->name;
        $user->role = $request->role;

        $this->userRespository->save($user);
    }
}

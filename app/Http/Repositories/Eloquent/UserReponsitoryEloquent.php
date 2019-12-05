<?php


namespace App\Http\Repositories\Eloquent;


use App\Http\Repositories\UserReponsitoryInterface;
use App\User;

class UserReponsitoryEloquent implements UserReponsitoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    function findById($id)
    {
        return $this->user->findOrFail($id);
    }

    function save($user)
    {
        $user->save();
    }
}

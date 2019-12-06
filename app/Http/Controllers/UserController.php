<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditUserRequest;
use App\Http\Services\Impl\UserServiceImpl;
use App\Rules\MatchOldPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserServiceImpl $userService)
    {
        $this->middleware('auth');
        $this->userService = $userService;
    }

    public function information($id)
    {
        $user = $this->userService->findById($id);

        return view('users.information', compact('user'));
    }

    public function edit($id)
    {
       if (Gate::allows('crud-users')) {
           $user = $this->userService->findById($id);
           return view('users.edit', compact('user'));
       }
       abort(403, 'you do not have access');
    }

    public function changePassword()
    {
        return view('users.changePassword');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        $message = 'Change Password Success';

        return view('users.success', compact('message'));
    }

    public function update(EditUserRequest $request, $id)
    {
        $this->userService->update($request, $id);
        $message = 'Change Profile Success';

        return view('users.success', compact('message'));
    }

    public function getAll()
    {
       if (Gate::allows('crud-users')) {
           $users = $this->userService->getAll();
           return view('users.list', compact('users'));
       }
       abort(403, 'you do not have access');
    }
}

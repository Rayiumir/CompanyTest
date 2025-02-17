<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserCreateRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(5);
        return view('user.index', compact('users'));
    }

    public function create(){
        return view('user.create');
    }

    public function store(UserCreateRequest $request){
        $data = $request->validated();
        $data['password'] = Hash::make($request->password);

        User::create($data);

        return to_route('users.index');
    }

    public function edit(User $user){
        return view('user.edit', compact('user'));
    }

    public function update(UserUpdateRequest $request, User $user){
        $user->update(
            $request->validated()
        );
        return to_route('users.index');
    }

    public function destroy(Request $request, User $user){
        $user->delete();
        return back();
    }
}

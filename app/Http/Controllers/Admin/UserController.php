<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Models\Event;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {

        $users = User::All();
        $statuses = User::distinct()->pluck('status')->toArray();
        $adminevents = Event::all();

        return view('Admin.dashadmin', compact('users','statuses','adminevents'));
    }

    // public function index()
    // {
    //     $condidate = Auth::user();
    //     $experiences = Experience::where('user_id', $condidate->id)->get();
    // $Skills = $condidate->Skills;

    // }

    public function Show(User $admin)
    {

        $roles = Role::All();
        $statuses = User::distinct()->pluck('status')->toArray();

        return view('Admin.dashadmin.users.update', compact('admin', 'roles', 'statuses'));
    }

    public function edit(User $admin)
    {

        return view('Admin.dashadmin.users.update', compact('admin'));
    }

    public function update(UserStoreRequest $request, User $admin)
    {
        $data = $request->validated();
        $admin->roles()->sync([$request->role_id]);
        return redirect()->route('admin.index');
    }

    // public function destroy($id)
    // {

    // }
}

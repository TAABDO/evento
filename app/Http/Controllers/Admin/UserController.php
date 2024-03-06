<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $users=User::All();
       return view('Admin.dashadmin',compact('users'));
    }

    // public function index()
    // {
    //     $condidate = Auth::user();
    //     $experiences = Experience::where('user_id', $condidate->id)->get();
    //     // $Skills = $condidate->Skills;

    //     return view('condidates.condidate', compact('condidate', 'experiences'));
    // }

    public function Show($id)
    {
        $users = Auth::user();

        return view('Admin.update', compact('users'));
    }

    public function edit()
    {
        return view('Admin.update');
    }

    public function update(UserUpdateRequest $request)
    {
        $condidate = Auth::user();
        $data = $request->all();

        // if ($request->hasFile('user')) {
        //     $condidate->clearMediaCollection('user');
        //     $condidate->addMediaFromRequest('user')->toMediaCollection('user');
        // }

        $condidate->update($data);

        return redirect()->route('condidate.index');
    }

    // public function destroy(Event $event)
    // {
    //     //
    // }
}

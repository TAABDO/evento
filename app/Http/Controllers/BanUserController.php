<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BanUserController extends Controller
{
    public function banuser($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('admin.index')->with('error', 'User not found.');
        }

        if ($user->status === 'active') {
            $user->update(['status' => 'banned']);
        } else {
            $user->update(['status' => 'active']);
        }

        return redirect()->route('admin.index')->with('success', 'User status updated successfully.');
    }
}

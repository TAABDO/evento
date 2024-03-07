<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BanUserController extends Controller
{
    public function banuser($id)
    {
        $user = User::find($id);
        $user->update(['status' => 'banned']);

        return redirect(route('admin.index'));
    }
}

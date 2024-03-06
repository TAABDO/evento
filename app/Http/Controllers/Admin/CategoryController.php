<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{


public function index()
{
    $users=User::all();
return view('Admin.dashadmin',compact('$users'));
}

public function create()
{

}
public function store()
{

}
public function show()
{

}
public function edit()
{

}

public function update()
{

}

public function destroy()
{

}





}

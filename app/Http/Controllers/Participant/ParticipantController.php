<?php

namespace App\Http\Controllers\Participant;

use App\Http\Controllers\Controller;
use App\Http\Requests\ParticipantStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParticipantController extends Controller
{
    public function index()
    {
        $participants = Auth::user();
        // $experiences = Experience::where('user_id', $condidate->id)->get();
        // $Skills = $condidate->Skills;

        return view('participants.participant', compact('participants'));
    }

    public function Show()
    {
        $participants = Auth::user();

        return view('participants.update', compact('participants'));
    }

    public function edit()
    {
        return view('participants.update');
    }

    // public function update(ParticipantStoreRequest $request)
    // {
    //     $condidate = Auth::user();
    //     $data = $request->all();

    //     if ($request->hasFile('user')) {
    //         $condidate->clearMediaCollection('user');
    //         $condidate->addMediaFromRequest('user')->toMediaCollection('user');
    //     }

    //     $condidate->update($data);

    //     return redirect()->route('participant.index');
    // }
}

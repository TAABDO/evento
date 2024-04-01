<?php
namespace App\Http\Controllers\Reservation;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function Reservation($id)
    {
        $user = Auth::user();
        $event = Event::find($id);
        $status = 'reserved';

        if ($user->events()->where('event_id', $event->id)->exists()) {
            return redirect()->back()->with('error', 'You have already reserved a ticket for this event.');
        }

        if ($event->isAuto == 'auto' && $event->availablePlaces > 0) {
            $event->availablePlaces = $event->availablePlaces - 1;
            $event->save();

            $user->events()->attach($event->id, ['status' => $status]);

            $pdf = PDF::loadView('pdf', compact('user', 'event'));
            return $pdf->download('invoice.pdf');
        } else {
            $user->events()->attach($event->id, ['status' => 'pending']);
            session()->flash('info', 'Ticket reservation is pending approval.');
            return redirect()->back();
        }
    }
}
?>

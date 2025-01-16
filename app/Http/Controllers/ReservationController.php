<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function reserve(Request $request)
    {
        $user = $request->user();
        if ($user->penalized_until && $user->penalized_until->isFuture()) {
            return back()->with('error' , 'You are penalized and cannot reserve books until ' . $user->penalized_until->format('Y-m-d'));
        }

        $request->validate(['book_id' => 'required|exists:books,id', 'user_id' => 'required|exists:users,id',]);
        $book = Book::findOrFail($request->book_id);
        $reservation = Reservation::create([
            'book_id' => $book->id,
            'book_name' => $book->title,
            'user_id' => $request->user_id,
            'return_date' => Carbon::now()->addDays(10),
        ]);
        return back()->with('success', 'Reservation successful');
    }
    public function userReservations()
    {
        $user = Auth::user();
        $reservations = Reservation::where('user_id', $user->id)->with('book')->get();
        return view('user_reservations', compact('reservations'));
    }
    public function cancelReservation($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return back()->with('success', 'Reservation canceled successfully');
    }

    public function penalize(Request $request, $userId)
    {
        $user = User::findOrFail($userId);
        $user->penalized_until = now()->addDays(30);
        $user->save();
        return redirect()->back()->with('message', 'User has been penalized for 30 days.');
    }

}

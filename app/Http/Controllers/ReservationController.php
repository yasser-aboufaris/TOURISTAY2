<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use Carbon\Carbon;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function takeReservations(Request $request, $id)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);
    
        $idHouse = $id;
        $userId = auth()->id();
        $startDate = $request->start_date;
        $endDate = $request->end_date;
    
        // Calculate number of days
        $days = Carbon::parse($startDate)->diffInDays(Carbon::parse($endDate)) + 1;
    
        $reservations = Reservation::where('id_house', $idHouse)->get();
    
        foreach ($reservations as $reservation) {
            if (($startDate <= $reservation->end_date) && ($endDate >= $reservation->start_date)) {
                return redirect()->back();
            }
        }
    
        $reservation = Reservation::create([
            'id_house' => $idHouse,
            'id_user' => $userId,
            'start_date' => $startDate,
            'end_date' => $endDate,
        ]);
    
        return redirect()->back()->with([
            'success' => 'Reservation successfully created.',
            'days' => $days
        ]);
    }
    
public function checkAvailability(Request $request, $id)
{
    $request->validate([
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
    ]);

    $idHouse = $id;
    $startDate = Carbon::parse($request->start_date);
    $endDate = Carbon::parse($request->end_date);

    $reservations = Reservation::where('id_house', $idHouse)->get();

    foreach ($reservations as $reservation) {
        $reservedStart = Carbon::parse($reservation->start_date);
        $reservedEnd = Carbon::parse($reservation->end_date);

        // Check for date overlap
        if ($startDate->lte($reservedEnd) && $endDate->gte($reservedStart)) {
            return redirect()->back();
        }
    }

    return redirect()->back()->with('availability', 1);
}

}

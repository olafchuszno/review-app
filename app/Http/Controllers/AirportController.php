<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AirportController extends Controller
{
    public function index()
    {
        $input = request('airport');

        $airports = [];

        $airports = DB::table('airports')
        ->where('code', 'like', '%'.$input.'%')
        ->orWhere('cityCode', 'like', '%'.$input.'%')
        ->orWhere('cityName', 'like', '%'.$input.'%')
        ->orWhere('countryName', 'like', '%'.$input.'%')
        ->get();

        foreach ($airports as $airport) {
            $airports[] = $airport;
        }

        return view('airport.index', [
            'airports' => $airports
        ]);
    }

    public function show(Airport $airport)
    {
        $other_airports = null;

        // Check for other airports in the area
        if ($airport->numAirports > 1) {
            $other_airports = DB::table('airports')->
            where('cityCode', $airport->cityCode)->whereNot('code', $airport->code)->get();
        }

        return view('airport.show', [
            'airport' => $airport,
            'other_airports' => $other_airports,
            'other_airports_num' => $airport->numAirports - 1
        ]);
    }
}

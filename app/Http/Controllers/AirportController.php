<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AirportController extends Controller
{
    public function index()
    {
        return view('airport.index', [
            'airports' => $this->search_airports()
        ]);
    }

    public function show(Airport $airport)
    {
        return view('airport.show', [
            'airport' => $airport,
            'other_airports' => $this->other_airports($airport),
            'other_airports_num' => $airport->numAirports - 1
        ]);
    }


    public function search_airports()
    {
        $input = request('airport');

        return DB::table('airports')
        ->where('code', 'like', '%'.$input.'%')
        ->orWhere('cityCode', 'like', '%'.$input.'%')
        ->orWhere('cityName', 'like', '%'.$input.'%')
        ->orWhere('countryName', 'like', '%'.$input.'%')
        ->get();
    }

    public function other_airports(Airport $airport)
    {
        return DB::table('airports')
            ->where('cityCode', $airport->cityCode)->whereNot('code', $airport->code)->get();
    }
}

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

        $query = DB::table('airports')
        ->where('code', 'like', '%'.$input.'%')
        ->orWhere('cityCode', 'like', '%'.$input.'%')
        ->orWhere('cityName', 'like', '%'.$input.'%')
        ->orWhere('countryName', 'like', '%'.$input.'%')
        ->get();

        foreach ($query as $item) {
            $airports[] = $item;
        }

        return view('airport.index', [
            'airports' => $airports
        ]);
    }

    public function show(Airport $airport)
    {
        dd('airport.show');
        // return view('')
    }
}

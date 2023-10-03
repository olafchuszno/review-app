<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

    public function show()
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
}
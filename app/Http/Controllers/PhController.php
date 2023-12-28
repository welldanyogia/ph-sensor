<?php

namespace App\Http\Controllers;

use App\Models\Ph;
use Illuminate\Http\Request;

class PhController extends Controller
{
    public function index()
    {
        try {
            // Get the latest record from the ph table
            $latestPhRecord = Ph::latest('id')->firstOrFail();

            // Pass the data to the view
            return view('welcome', [
                'ph' => $latestPhRecord->ph,
                'voltage' => $latestPhRecord->voltage,
                'sifat' => $latestPhRecord->sifat,
            ]);
        } catch (\Exception $e) {
            // Handle the case where there's no record
            return view('welcome')->with('error', 'No data found');
        }
    }


    public function latestData()
    {
        $latestData = Ph::latest('id')->first();

        return response()->json($latestData);
    }
}

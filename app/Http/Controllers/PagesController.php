<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use Carbon\Carbon;

class PagesController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function daily() {

        $today = Carbon::now()->dayOfWeek;

        $collections= Collection::where('day', '=', $today)
        ->orderBy('hour')
        ->get();

        return view('dailyView', compact('collections'));
    }

}

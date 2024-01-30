<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function destination()
    {
        $locale = session('locale', 'en');

        $planets = Destination::select(
            "{$locale}_name as name",
            "{$locale}_description as description",
            "distance",
            "duration",
            "picture",
            "distance_unit",
            "{$locale}_duration_unit as duration_unit",
            "{$locale}_duration_unit as duration_unit"
        )->get();

        return view('destination', ['planets' => $planets]);
    }

    public function crew()
    {
        return view('crew');
    }

    public function technology()
    {
        return view('technology');
    }

}

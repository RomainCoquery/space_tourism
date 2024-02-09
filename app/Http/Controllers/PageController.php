<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Crew;
use App\Models\Technology;

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
        $locale = session('locale', 'en');

        $crews = Crew::select(
            "name",
            "{$locale}_description as description",
            "{$locale}_job as job",
            "picture"
        )->get();

        return view('crew', ['crews' => $crews]);
    }

    public function technology()
    {
        $locale = session('locale', 'en');

        $technologies = Technology::select(
            "id",
            "{$locale}_name as name",
            "{$locale}_description as description",
            "picture"
        )->get();

        return view('technology', ['technologies' => $technologies]);
    }

}

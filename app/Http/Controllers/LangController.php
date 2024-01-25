<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function destination()
    {
        return view('destination');
    }

    public function crew()
    {
        return view('crew');
    }

    public function technology()
    {
        return view('technology');
    }

    public function changeLang($locale)
    {
        if (in_array($locale, ['en', 'fr'])) {
            App::setLocale($locale);
            session()->put('locale', $locale);
        }

        return redirect()->back();
    }
}
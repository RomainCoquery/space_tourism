<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{

    public function changeLang($locale)
    {
        if (in_array($locale, ['en', 'fr'])) {
            App::setLocale($locale);
            session()->put('locale', $locale);
        }

        return redirect()->back();
    }
}
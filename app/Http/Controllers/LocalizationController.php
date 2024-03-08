<?php

// namespace App\Http\Controllers;

// use Illuminate\Support\Facades\App;



// class LocalizationController extends Controller
// {
//     public function __invoke($locale)
//     {
//         if (!in_array($locale, config('localization.locales'))) {
//             abort(400);
//         }

//         session(['localization'=>$locale]);

//         return redirect()->back();
//     }
// }


namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;


class LocalizationController extends Controller
{
    public function __invoke($locale)
    {
        if (!in_array($locale, config('localization.locales'))) {
            abort(400);
        }

        session(['localization' => $locale]);

        if ($locale !== config('app.locale')) {
            URL::defaults(['locale' => $locale]);
        } else {
            URL::defaults(['locale' => null]);
        }

        return redirect()->back();
    }
}
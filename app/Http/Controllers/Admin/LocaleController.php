<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class LocaleController extends Controller
{
    public function setLocale($locale)
    {
        if (in_array($locale, ['en-ltr', 'ar-rtl']))
            Cookie::queue(Cookie::forever('app_locale', $locale));
        return back();
    }
}

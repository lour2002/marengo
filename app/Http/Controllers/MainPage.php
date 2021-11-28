<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class MainPage extends Controller
{
  /**
   * Handle the incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function __invoke(Request $request)
  {
    /** Set Locale */
    $locale = $request->locale ?? config('app.locale');

    if (! in_array($locale, config('app.locales'))) {
      abort(404);
    }

    App::setLocale($locale);



    return view('main');
  }
}

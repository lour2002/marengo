<?php

namespace App\Http\Controllers;

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
    app()->setLocale('uk');

    abort_if($request->locale, 404);

    return view('main');
  }
}

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use App\Ad;
use Carbon\Carbon;

Route::get('/', function (Request $request) {
    $apiurl = $request->query("apiurl");
    if ($apiurl) {
      $ad = Ad::firstOrCreate([
        "link" => $apiurl,
        "alias" => $request->query('alias')
      ]);
      session([
        "urlaccessdate" => Carbon::now()
      ]);
      return redirect('/' . $ad->id);
    } else {
      return view('welcome');
    }
});

Route::get('/{id}', function ($id) {

  $ad = Ad::findOrFail($id);
  $start = session('urlaccessdate');
  $finish = Carbon::now();
  return view('ad')->with([
    "id" => $ad->id,
    "viewed" => $finish->diffInSeconds($start) >= 10,
    "alias" => $ad->alias
  ]);
});

Route::post('/url', function (Request $r) {
  $r->validate([
    'token' => 'required|captcha',
    'id' => 'required|uuid'
  ]);
  $start = session('urlaccessdate');
  $finish = Carbon::now();
  // dd($finish->diffInSeconds($start));
  $ad = Ad::find($r->id);

  if ($finish->diffInSeconds($start) <= 9) {
    return redirect("/?apiurl=". $ad->link);
  }
  // dd($ad);
  return redirect($ad->link);
});


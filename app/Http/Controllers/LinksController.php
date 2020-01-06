<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class LinksController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function shorten(Request $request) {
        $random_token = Str::random(8);

        DB::table('links')->insert([
            'original_link' => $request['original_link'],
            'short_link' => URL::to('/') . '/' . $random_token,
        ]);

        return URL::to('/') . '/' . $random_token;
    }

    /* Create a function that will check whether or not the received url is the same as the one in the database. */
    /* If already created, echo already created. */
    /* If not created, echo not created. */

    public function fetchLink($link) {
        $short_link = URL::to('/') . '/' . $link;
        $query = DB::table('links')->where('short_link', '=', $short_link);

        if ($query->exists()) {
            return redirect($query->value('original_link'));
        } else {
            return 'does not exist';
        }
    }
}

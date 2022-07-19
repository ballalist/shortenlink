<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Link;

class ShortenLinkController extends Controller
{
    public function index($slug) {

        $link = Link::where('slug', $slug)->first();
        if($link) {
            // added stats
            $link->stats = $link->stats+1;
            $link->save();
            
            return redirect($link->url);
        } else {
            return view('welcome', ['notFound' => true]);
        }
    }
}

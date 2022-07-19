<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use Redirect;
use Session;

class AdminManagementController extends Controller
{

    public function index()
    {   
        if(Session::get('admin')) {
            $links = Link::paginate(3);
            return view('admin-management',['links' => $links]);
        } else {
            return Redirect::to(url()->previous());
        }
    }

    public function delete($id)
    {
        $link = Link::find($id);
        $link->delete();
        return Redirect::to(url()->previous());
    }
}

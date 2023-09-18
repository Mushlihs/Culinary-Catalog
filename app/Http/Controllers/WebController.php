<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home() {
        $data=Culinary::take(8)->get();
        return view('pages.home', compact("data"));
    }
    public function detail($id) {
        $data=Culinary::where("id",$id)->first();
        return view('pages.detail', compact("data"));
    }
    public function page() {
        $data=Culinary::paginate(8);
        return view('pages.page',compact("data"));

    }
}

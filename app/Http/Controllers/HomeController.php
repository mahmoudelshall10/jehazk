<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Slider as slider;
use App\Model\Brand as brand;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $all_brand = brand::where('status',1)->get();
        return redirect('/');
    }
    

}

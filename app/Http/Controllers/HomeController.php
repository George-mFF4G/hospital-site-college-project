<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function reg()
    {
        return view('auth.register');
    }
    public function store()
    {
        $data = request()->all();
        user::create([
            'name'      =>$data['name'],
            'email'     =>$data['email'],
            'password'  =>$data['password'],
        ]);
        return redirect('home')->with('msg','New User Added...');
    }
}

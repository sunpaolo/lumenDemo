<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function index(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        //return $request->input('name');
        //return config('database');
        //return redirect('hello');
        return View::make('tools/index')->with('request', $request->input());
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PessoaController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return [];
    }

    public function show($id){
        return [];
    }


    public function store($id){
        return [];
    }

    public function update(Request $request){
        return [];
    }

    public function destroy($id){
        return [];
    }
}

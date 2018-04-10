<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoa::all();
        return view('pessoa.pessoas', ['pessoas'=> $pessoas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoa.pessoa',['pessoa' => new Pessoa()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(empty($request->id)){
            $pessoa=$request->all();
            unset($pessoa["_token"]);
            Pessoa::insert($pessoa);
            return redirect('pessoas');
        }else
        {
        //dd($request->all());
            $pessoa=$request->all();
            unset($pessoa["id"]);
            unset($pessoa["_token"]);
            Pessoa::where('id',$request->id)->update($pessoa);
        // $pessoa->save();
            return redirect('pessoas');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $pessoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoa)
    {
        // dd($pessoa);
        return view('pessoa.pessoa', ['pessoa'=> $pessoa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        //
        $pessoa->save();
        return view('pessoa.pessoa', ['pessoa'=> $pessoa]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {

        Pessoa::destroy($pessoa->id);
    }
}

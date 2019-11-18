<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\revisao;
use Illuminate\Support\Facades\DB;


class revisaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revisao = revisao::all();
        return view('revisoes.index', compact("revisoes"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('revisoes.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Revisao::create($request->all());
        return redirect()->route('revisoes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $revisao = Revisao::find($id);
        return view('revisoes.show', compact('revisao'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $revisao = Revisao::find($id);
        return view('revisoes.edit', compact('revisao'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('revisao')
        ->where('id, $id')
        ->update(
            [
                'km' => $request->km,
                'funcEletrica' => $request->funcEletrica,
                'funcMecanica' =>$request->funcMecanica,
                'condFuncionamento' =>$request->condFuncionamento,
                'condPneu' =>$request->condPneu,
                'obsGeral' =>$request->obsGeral,
                'carro_id' =>$request->carro_id 


            ]
            );
            return redirect()->route('revisoes.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Revisao::destroy($id);
        return redirect()->route('revisoes.index');
        
    }
}

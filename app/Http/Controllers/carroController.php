<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\carro;
use Illuminate\Support\Facades\DB;



class carroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //exibir relação de registro na tela

        $carros = carro::all();
        return view('carros.index', compact("carros"));
        
        


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carros.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Carro::create($request->all());
        return redirect()->route('carros.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $carro = Carro::find($id);
        return view('carros.show', compact('carro'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carro = Carro::find($id);
        return view('carros.edit', compact('carro'));

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
        

        DB::table('carro')
        ->where('id', $id)
        ->update(
            [
            'modelo' => $request->modelo,
            'tipo' => $request->tipo,
            'combustivel' => $request->combustivel,
            'ano_fab' => $request->ano_fab,
            'fabricante' => $request->fabricante,
            'cor' => $request->cor
        ]);
        
        return redirect()->route('carros.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        Carro::destroy($id);
        return redirect()->route('carros.index');


    }
}

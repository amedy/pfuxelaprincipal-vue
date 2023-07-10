<?php

namespace App\Http\Controllers;

use App\Models\pfuxelacliente;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;


class PfuxelaclienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return pfuxelacliente::OrderBy('created_at', 'DESC')->get();
        
        // $pfuxelaclientes = Pfuxelacliente::all();
        // return response()->json($pfuxelaclientes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $newPfuxelacliente = new pfuxelacliente;
        $newPfuxelacliente-> nome = $request->nome;
        $newPfuxelacliente-> email = $request->email;
        $newPfuxelacliente-> contacto = $request->contacto;
        $newPfuxelacliente-> Data_requesicao = $request->Data_requesicao;
        $newPfuxelacliente-> local_partida = $request->local_partida;
        $newPfuxelacliente-> destino_partida = $request->destino_partida;
        $newPfuxelacliente-> passageiros = $request->passageiros;
        $newPfuxelacliente-> Data_estimativa_entrega = $request->Data_estimativa_entrega;
        $newPfuxelacliente-> horas_partida_viatura = $request->horas_partida_viatura;
        $newPfuxelacliente-> horas_entrega_viatura = $request->horas_entrega_viatura;
        $newPfuxelacliente-> descricao = $request->descricao;
        // $pfuxelacliente= Pfuxelacliente::create($request->all());
        // return response()->json(['message' => 'Requesição feita com sucesso.']);
        $newPfuxelacliente->save();
        return $newPfuxelacliente;

        return response()->json(['message' => 'Requesição feita com sucesso.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(pfuxelacliente $pfuxelacliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pfuxelacliente $pfuxelacliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $pfuxelacliente)
    {
        $existemCliente = pfuxelacliente::find($pfuxelacliente);
       
         if( $existemCliente ) {
            $existemCliente->nome = $request->nome;
            $existemCliente->email = $request->email;
            $existemCliente->contacto = $request->contacto;
            $existemCliente->Data_requesicao = $request->Data_requesicao;
            $existemCliente->local_partida = $request->local_partida;
            $existemCliente->destino_partida = $request->destino_partida;
            $existemCliente->passageiros = $request->passageiros;
            $existemCliente->Data_estimativa_entrega = $request->Data_estimativa_entrega;
            $existemCliente->horas_partida_viatura = $request->horas_partida_viatura;
            $existemCliente->horas_entrega_viatura = $request->horas_entrega_viatura;
            $existemCliente->descricao = $request->descricao;
            $existemCliente->save();
             return $existemCliente;
        }
    return response()->json(['message' => 'Requesição feita sem sucesso.']);        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($pfuxelacliente)
    {
        $existemCliente = pfuxelacliente::find($pfuxelacliente);
            if ( $existemCliente){
                $existemCliente->delete();
                return "Apagado com sucesso";

            }
            return "Sem nada por apagar";  
    }
}

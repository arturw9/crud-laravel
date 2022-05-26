<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use Illuminate\Http\Request;

class AdressesController extends Controller
{
    public function create(){
        return view('adresses.create');
    }
    public function store(Request $request){
        Adress::create([
            'rua' => $request->rua,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'pais' => $request->pais,
            'cep' => $request->cep,
        ]);
        return "Adress salvo com sucesso";
    }
    public function show(){
        $adresses = Adress::all();
        return view('adresses.todos',['adresses' => $adresses]);
    }
    public function destroy($id){
        $adress=Adress::findOrFail($id);
        $adress->delete();
        return "Endereco excluído com sucesso";
    }
    public function edit($id){
        $adress = Adress::findOrFail($id);
        return view('adresses.editar', ['adress' => $adress]);
    }
    public function update(Request $request, $id){
        $adress = Adress::findOrFail($id);
        $adress->update([
            'rua' => $request->rua,
            'numero' => $request->numero,
            'bairro' => $request->bairro,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'pais' => $request->pais,
            'cep' => $request->cep
        ]);
        return "Endereco atualizado com sucesso!";
    }
}

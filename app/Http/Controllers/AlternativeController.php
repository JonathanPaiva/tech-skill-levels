<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use Illuminate\Http\Request;

class AlternativeController extends Controller
{
    public function index()
    {
        $alternatives = Alternative::all();

        return view('alternatives.index')
                ->with('alternatives', $alternatives);
    }

    public function create()
    {
        return view('alternative.create');
    }

    public function store(Request $request)
    {
        Alternative::createRegister($request->all());
        
        return redirect('alternative')
                ->with('message', 'Criado com Sucesso!')
                ->with('type', 'success');
    }

    public function edit($id)
    {
        $alternative = Alternative::findOrFail($id);

        return view('alternative.edit',['alternative' => $alternative]);
    }

    public function update(Request $request)
    {
        Alternative::editRegister($request);

        return redirect('alternative')
                ->with('message', 'Editado com Sucesso!')
                ->with('type', 'success');
    }

    public function destroy($id)
    {
        Alternative::deleteRegister($id);

        return redirect('alternative')
               ->with('message', 'Excluído com Sucesso!')
               ->with('type', 'danger');
    }
}

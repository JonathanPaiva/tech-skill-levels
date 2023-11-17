<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{

    public function index()
    {
        $levels = Level::all();
        return view('levels.index')
                ->with('levels', $levels);
    }

    public function create()
    {
        return view('levels.create');
    }

    public function store(Request $request)
    {
        Level::createRegister($request->all());
        return redirect('levels')
                ->with('message', 'Criado com Sucesso!')
                ->with('type', 'success');
    }

    public function edit($id)
    {
        $level = Level::findOrFail($id);

        return view('levels.edit',['level' => $level]);
    }

    public function update(Request $request)
    {
        Level::editRegister($request);

        return redirect('levels')
                ->with('message', 'Editado com Sucesso!')
                ->with('type', 'success');
    }

    public function destroy($id)
    {
        Level::deleteRegister($id);

        return redirect('levels')
               ->with('message', 'Excluído com Sucesso!')
               ->with('type', 'danger');
    }
}

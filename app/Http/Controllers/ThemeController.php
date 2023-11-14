<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class ThemeController extends Controller
{

    public function index()
    {
        //var_dump('Listando temas');
        $themes = Theme::all();
        return view('themes.index')
                ->with('themes', $themes);
    }

    public function create()
    {
        //var_dump('Criando Tema');
        return view('themes.create');
    }

    public function store(Request $request)
    {
        //var_dump('Adicionando tema no banco');
        Theme::createRegister($request->all());
        return view('themes')
                ->with('message', 'Criado com Sucesso!')
                ->with('type', 'success');
    }

    public function edit($id)
    {
        //var_dump('Editando tema');
        $theme = Theme::findOrFail($id);

        return view('themes.edit',['theme' => $theme]);
    }

    public function update(Request $request)
    {
        //var_dump('Atualizando tema no banco');
        Theme::editRegister($request);

        return redirect('themes')
                ->with('message', 'Editado com Sucesso!')
                ->with('type', 'success');
    }

    public function destroy($id)
    {
        //var_dump('excluindo tema');
         Theme::deleteRegister($id);

         return redirect('themes')
                ->with('message', 'Excluído com Sucesso!')
                ->with('type', 'danger');
    }

    public function testeChamada()
    {
        return view('themes.index')
                ->with('message', 'Teste de mensagem!')
                ->with('type', 'success');
    }
}

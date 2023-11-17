<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class ThemeController extends Controller
{

    public function index()
    {
        $themes = Theme::all();
        return view('themes.index')
                ->with('themes', $themes);
    }

    public function create()
    {
        return view('themes.create');
    }

    public function store(Request $request)
    {
        Theme::createRegister($request->all());
        return redirect('themes')
                ->with('message', 'Criado com Sucesso!')
                ->with('type', 'success');
    }

    public function edit($id)
    {
        $theme = Theme::findOrFail($id);

        return view('themes.edit',['theme' => $theme]);
    }

    public function update(Request $request)
    {
        Theme::editRegister($request);

        return redirect('themes')
                ->with('message', 'Editado com Sucesso!')
                ->with('type', 'success');
    }

    public function destroy($id)
    {
         Theme::deleteRegister($id);

         return redirect('themes')
                ->with('message', 'Excluído com Sucesso!')
                ->with('type', 'danger');
    }

}

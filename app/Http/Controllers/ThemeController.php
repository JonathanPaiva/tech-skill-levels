<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

//        var_dump('Listando temas');
//        $theme = Theme::all();

        var_dump('Listando temas');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        var_dump('Criando Tema');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        var_dump('Adicionando tema no banco');
    }

    /**
     * Display the specified resource.
     */
    public function show(Theme $theme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Theme $theme)
    {
        var_dump('Editando tema');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Theme $theme)
    {
        var_dump('Atualizando tema no banco');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Theme $theme)
    {
        var_dump('excluindo tema');
    }
}

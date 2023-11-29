<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Question;
use App\Models\Theme;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    public function index()
    {
        $questions = Question::all();

        return view('questions.index')
                ->with('questions', $questions);
    }

    public function create()
    {
        $themes = Theme::all();
        $levels = Level::all();

        return view('questions.create')
                ->with('themes', $themes)
                ->with('levels', $levels);
    }

    public function store(Request $request)
    {
        Question::createRegister($request->all());
        
        return redirect('questions')
                ->with('message', 'Criado com Sucesso!')
                ->with('type', 'success');
    }

    public function edit($id)
    {
        $question = Question::findOrFail($id);
        $themes = Theme::all();
        $levels = Level::all();

        return view('questions.edit',[
            'question' => $question,
            'themes' => $themes,
            'levels' => $levels
        ]);
    }

    public function update(Request $request)
    {
        Question::editRegister($request);

        return redirect('questions')
                ->with('message', 'Editado com Sucesso!')
                ->with('type', 'success');
    }

    public function destroy($id)
    {
        Question::deleteRegister($id);

        return redirect('questions')
               ->with('message', 'Excluído com Sucesso!')
               ->with('type', 'danger');
    }
}

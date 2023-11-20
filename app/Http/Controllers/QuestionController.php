<?php

namespace App\Http\Controllers;

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
        return view('questions.create');
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

        return view('questions.edit',['question' => $question]);
    }

    public function update(Request $request, Question $question)
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

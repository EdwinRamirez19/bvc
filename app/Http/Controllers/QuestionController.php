<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    
    public function index()
    {
        $questions = Question::latest()->paginate(3);

        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        $questions = null;
        return view('questions.create', compact('questions'));
    }

    public function store(Request $request)
    {
        $questions = Question::create($request->all());

        return redirect()->route('questions.index');
       
        
    }

    public function show($id)
    {
        $question = Question::find($id);

        return view('questions.show', compact('question'));
        
    }

    public function edit($id)
    {
        $question  = Question::find($id);
    return view('questions.edit',compact('question'));
        
    }

    public function update(Request $request, $id)
    {
    $questions = Question::find($id);
    $questions->update($request->all());

    return redirect()->route('questions.index');
        
    }

  
    public function destroy($id)
    {
    Question::find($id)->delete();
    return back()->with('info','Encuesta Eliminada Con Exito');
        
    }
}

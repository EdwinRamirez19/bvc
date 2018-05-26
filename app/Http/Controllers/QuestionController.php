<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Http\Requests\QuestionStoreRequest;
use App\Http\Requests\QuestionUpdateRequest;

class QuestionController extends Controller
{
    
    public function index()
    {
        $questions = Question::latest()->paginate(3);

        return view('questions.index', compact('questions'));
    }

    public function create()
    {
        $question = null;
        return view('questions.create', compact('question'));
    }

    public function store(QuestionStoreRequest $request)
    {
        $question = Question::create($request->all());

        return redirect()->route('questions.index',compact('question'));
       
        
    }

    public function show(Question $question)
    {
        

        return view('questions.show', compact('question'));
        
    }

    public function edit(Question $question)
    {
       
    return view('questions.edit',compact('question'));
        
    }

    public function update(QuestionUpdateRequest $request, Question $question)
    {
   
    $question->update($request->all());

    return redirect()->route('questions.index');
        
    }

  
    public function destroy(Question $question)
    {
       $question->delete();
    return redirect()->route('questions.index');
        
    }
}

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
        
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

  
    public function destroy($id)
    {
        
    }
}

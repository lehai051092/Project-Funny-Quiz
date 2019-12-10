<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditUserRequest;
use App\Http\Requests\QuestionRequest;
use App\Http\Services\AnswerServiceInterface;
use App\Http\Services\CategoryServiceInterface;
use App\Http\Services\QuestionServiceInterface;

class
QuestionController extends Controller
{
    protected $questionService;
    protected $categoryService;
    protected $answerService;

    public function __construct(QuestionServiceInterface $questionService,
                                CategoryServiceInterface $categoryService,
                                AnswerServiceInterface $answerService
    )
    {
        $this->questionService = $questionService;
        $this->categoryService = $categoryService;
        $this->answerService = $answerService;
        $this->middleware('auth');
    }

    public function questionsInCategory($id)
    {
        $category = $this->categoryService->findById($id);
        $questions = $category->questions;
        $answers = $this->answerService->getALL();
        return view('questions.list', compact('category', 'questions', 'answers'));
    }

    public
    function create($id)
    {
        $category = $this->categoryService->findById($id);
        $questions= $category->questions->first();
//
        return view('questions.createForm', compact('category','questions'));
    }

    public function store(QuestionRequest $request)
    {
        $this->questionService->create($request);
        return redirect()->route('categories.list');

    }

    public function delete($id)
    {
        $this->questionService->delete($id);
        return redirect()->route('categories.list');
    }

    public function edit($id)
    {
       $question=$this->questionService->findById($id);
       $categories=$this->categoryService->getALL();
        return view('questions.editForm', compact('question', 'categories'));
    }

    public function update(QuestionRequest $request, $id)
    {
        $this->questionService->update($request, $id);
        return redirect()->route('categories.list');
    }
}

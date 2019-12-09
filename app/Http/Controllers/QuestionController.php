<?php

namespace App\Http\Controllers;

use App\Http\Services\AnswerServiceInterface;
use App\Http\Services\CategoryServiceInterface;
use App\Http\Services\QuestionServiceInterface;
use Illuminate\Http\Request;

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
    }

    public function questionsInCategory($id)
    {
        $category = $this->categoryService->findById($id);
        $questions = $category->questions;
        $answers = $this->answerService->getALL();
        return view('questions.list', compact('category', 'questions', 'answers'));
    }

    public
    function create()
    {
        $categories = $this->categoryService->getALL();
//        $answers = $this->answerService->getALL();
        return view('questions.createForm', compact('categories'));
    }

    public
    function store(Request $request)
    {
        $this->questionService->create($request);
        return redirect()->route('index');
//        $categories = $this->categoryService->getALL();
//        $questions = $this->questionService->getALL();
//        foreach ($categories as $category) {
//            foreach ($questions as $question) {
//                if ($question->category_id === $category->id)
//                    return redirect()->route('questions.list', $category->id);
//            }
//        }

    }

    public function delete($id)
    {
        $this->questionService->delete($id);
        return redirect()->route('categories.list');
    }

    public function edit($id)
    {
        $question = $this->questionService->findById($id);
        $categories = $this->categoryService->getALL();
        return view('questions.editForm', compact('question', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $this->questionService->update($request, $id);
        return redirect()->route('categories.list');
    }
}

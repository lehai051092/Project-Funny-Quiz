<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswerRequest;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\QuestionRequest;
use App\Http\Services\AnswerServiceInterface;
use App\Http\Services\QuestionServiceInterface;

class AnswerController extends Controller
{
    protected $answerService;
    protected $questionService;

    public function __construct(AnswerServiceInterface $answerService,
                                QuestionServiceInterface $questionService)
    {
        $this->answerService = $answerService;
        $this->questionService = $questionService;
    }

    public function answersInQuestion()
    {
        $question = $this->questionService->getALL();
        $answers = $question->answers;
        return view('questions.list', compact('question', 'answers'));
    }

    public function create($id)
    {
        $answers = $this->answerService->getALL();
        $question = $this->questionService->findById($id);
        return view('answer.createForm', compact('answers', 'question'));
    }

    public function store(AnswerRequest $request)
    {
        $this->answerService->create($request);
        return redirect()->route('categories.list');
    }

    public function delete($id)
    {
        $this->answerService->delete($id);
        return redirect()->route('categories.list');
    }

    public function edit($id)
    {
        $answer = $this->answerService->findById($id);
        $questions = $this->questionService->getALL();
        return view('answer.editForm', compact('answer', 'questions'));
    }

    public function update(AnswerRequest $request,$id){
        $this->answerService->update($request,$id);
        return redirect()->route('categories.list');
    }
}

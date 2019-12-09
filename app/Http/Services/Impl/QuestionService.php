<?php


namespace App\Http\Services\Impl;


use App\Http\Repositories\QuestionRepositoryInterface;
use App\Http\Services\QuestionServiceInterface;
use App\Question;

class QuestionService implements QuestionServiceInterface
{
    protected $questionRepository;

    public function __construct(QuestionRepositoryInterface $questionRepository)
    {
        $this->questionRepository = $questionRepository;
    }

    public function getALL()
    {
        return $this->questionRepository->getALL();
    }

    public function create($request)
    {
        $question = new Question();
        $question->question = $request->question;
        $question->category_id = $request->category_id;
        return $this->questionRepository->save($question);
    }

    public function findById($id)
    {
        return $this->questionRepository->findById($id);
    }

    public function delete($id)
    {
        $question = $this->questionRepository->findById($id);
        return $this->questionRepository->delete($question);
    }

    public function update($request, $id)
    {
        $question = $this->questionRepository->findById($id);
        $question->question = $request->question;
        $question->category_id = $request->category_id;
        return $this->questionRepository->update($question);
    }
}

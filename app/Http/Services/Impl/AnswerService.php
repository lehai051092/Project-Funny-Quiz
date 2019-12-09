<?php


namespace App\Http\Services\Impl;


use App\Answer;
use App\Http\Repositories\AnswerRepositoryInterface;
use App\Http\Services\AnswerServiceInterface;

class AnswerService implements AnswerServiceInterface
{
    protected $answerRepository;

    public function __construct(AnswerRepositoryInterface $answerRepository)
    {
        $this->answerRepository = $answerRepository;
    }

    public function getALL()
    {
        return $this->answerRepository->getALL();
    }

    public function create($request)
    {
        $answer = new Answer();
        $answer->answer = $request->answer;
        $answer->question_id = $request->question_id;
        return $this->answerRepository->save($answer);
    }

    public function findById($id)
    {
        return $this->answerRepository->findById($id);
    }

    public function delete($id)
    {
        $answer = $this->answerRepository->findById($id);
        return $this->answerRepository->delete($answer);
    }

    public function update($request, $id)
    {
        $answer = $this->answerRepository->findById($id);
        $answer->answer = $request->answer;
        $answer->question_id = $request->question_id;
        return $this->answerRepository->update($answer);
    }
}

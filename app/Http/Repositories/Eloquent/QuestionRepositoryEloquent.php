<?php


namespace App\Http\Repositories\Eloquent;


use App\Http\Repositories\QuestionRepositoryInterface;
use App\Question;

class QuestionRepositoryEloquent implements QuestionRepositoryInterface
{
    protected $question;

    public function __construct(Question $question)
    {
        $this->question = $question;
    }

    public function getALL()
    {
        return $this->question->all();
    }

    public function save($obj)
    {
      $obj->save();
    }

    public function findById($id)
    {
        return $this->question->findOrFail($id);
    }

    public function delete($obj)
    {
       return $obj->delete();
    }

    public function update($obj)
    {
        $obj->save();
    }
}

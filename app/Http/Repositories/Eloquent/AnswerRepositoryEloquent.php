<?php


namespace App\Http\Repositories\Eloquent;


use App\Answer;
use App\Http\Repositories\AnswerRepositoryInterface;

class AnswerRepositoryEloquent implements AnswerRepositoryInterface
{
    protected $answer;

    public function __construct(Answer $answer)
    {
        $this->answer = $answer;
    }

    public function getALL()
    {
        return $this->answer->all();
    }

    public function save($obj)
    {
        $obj->save();
    }

    public function findById($id)
    {
        return $this->answer->findOrFail($id);
    }

    public function delete($obj)
    {
        return $obj->delete();
    }

    public function update($obj)
    {
        return $obj->save();
    }
}

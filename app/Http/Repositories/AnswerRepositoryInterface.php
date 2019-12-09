<?php


namespace App\Http\Repositories;


interface AnswerRepositoryInterface
{
    public function getALL();

    public function save($obj);

    public function findById($id);

    public function delete($obj);

    public function update($obj);
}

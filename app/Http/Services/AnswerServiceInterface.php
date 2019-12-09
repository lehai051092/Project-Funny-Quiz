<?php


namespace App\Http\Services;


interface AnswerServiceInterface
{
    public function getALL();

    public function create($request);

    public function findById($id);

    public function delete($id);

    public function update($request, $id);
}

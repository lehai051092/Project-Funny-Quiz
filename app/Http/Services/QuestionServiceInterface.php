<?php


namespace App\Http\Services;


interface QuestionServiceInterface
{
    public function getALL();

    public function create($request);

    public function findById($id);

    public function delete($id);

    public function update($request, $id);
}

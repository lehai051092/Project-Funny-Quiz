<?php


namespace App\Http\Services;


interface CategoryServiceInterface
{
    public function getALL();

    public function create($request);

    public function findById($id);

    public function delete($id);
}

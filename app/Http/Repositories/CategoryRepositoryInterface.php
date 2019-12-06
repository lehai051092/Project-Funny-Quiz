<?php


namespace App\Http\Repositories;


interface CategoryRepositoryInterface
{
    public function getALL();

    public function save($obj);

    public function findById($id);

    public function delete($obj);
}

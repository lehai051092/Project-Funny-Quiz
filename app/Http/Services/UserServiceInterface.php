<?php


namespace App\Http\Services;


interface UserServiceInterface
{
    function findById($id);

    function update($request, $id);

    function getAll();
}

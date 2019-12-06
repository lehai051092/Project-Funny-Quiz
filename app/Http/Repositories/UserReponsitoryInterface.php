<?php


namespace App\Http\Repositories;


interface UserReponsitoryInterface
{
    function findById($id);

    function save($user);

    function getAll();
}

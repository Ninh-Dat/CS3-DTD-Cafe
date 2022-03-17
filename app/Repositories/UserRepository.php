<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository
{

    public function getModel()
    {
        return User::class;
    }

    public function getBuyId($id)
    {
        // TODO: Implement getBuyId() method.
    }

    public function deleteBuyId($id)
    {
        // TODO: Implement deleteBuyId() method.
    }
}
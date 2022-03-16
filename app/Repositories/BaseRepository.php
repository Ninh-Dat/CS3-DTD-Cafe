<?php

namespace App\Repositories;

use App\Repositories\Impl\BaseInterface;

abstract class BaseRepository implements BaseInterface
{
    public $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    public abstract function getModel();

    public function getAll()
    {
      return $this->model::all();
    }

    public function getById($id)
    {
<<<<<<< HEAD

=======
>>>>>>> fd6486c51b1258f60ef5ab6e32240b5f2c20dee6
        return $this->model::findOrFail($id);
    }

    public function deleteById($id)
    {
        return $this->model::destroy($id);
    }
}

<?php

namespace App\Repositories;

use App\Models\OrderDetail;

class Order_detailRepository extends BaseRepository
{

    public function getModel()
    {
        return OrderDetail::class;
    }
}
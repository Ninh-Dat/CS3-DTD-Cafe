<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses= new Status();
        $statuses->name = "Chờ lấy hàng";
        $statuses->save();

        $statuses= new Status();
        $statuses->name = "Đang giao";
        $statuses->save();

        $statuses= new Status();
        $statuses->name = "Giao hàng thành công";
        $statuses->save();
    }
}

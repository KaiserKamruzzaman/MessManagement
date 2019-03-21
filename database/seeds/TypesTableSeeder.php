<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type=new Type();
        $type->type_id=1;
        $type->type_name='Admin';
        $type->save();

        $types=new Type();
        $types->type_id=2;
        $types->type_name='User';
        $types->save();

    }
}

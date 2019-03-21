<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Member;
class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $member=new Member();
        $member->mem_Name='Admin';
        $member->user_Name= 'admin';
        $member->password= 123456;
        $member->phone_no= 111111111;
        $member->imgPath='n/a';
        $member->type_id=1;
        $member->save();
    }
}

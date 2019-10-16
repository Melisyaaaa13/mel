<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "admin";
        $adminRole->save();

        // role member
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "member";
        $memberRole->save();

        //role sample admin
        $admin = new User();
        $admin->name = "admin";
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->attachRole($adminRole);

        //role sample member
        $member = new User();
        $member->name = "member";
        $member->email = 'member@gmail.com';
        $member->password = bcrypt('member');
        $member->save();
        $member->attachRole($memberRole);    }
}

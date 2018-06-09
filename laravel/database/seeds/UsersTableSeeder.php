<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user1 = new App\User();
        $user1->name = 'qaz';
        $user1->email = 'qaz@qaz.pl';
        $user1->password = bcrypt('qaz');
        $user1->save();
        
        $user2= new App\User();
        $user2->name = 'Bla';
        $user2->email = 'bla@bla.pl';
        $user2->password = bcrypt('bla');
        $user2->save();
    }
}

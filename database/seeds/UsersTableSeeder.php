<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
         // reset the users table
         DB::statement('SET FOREIGN_KEY_CHECKS=0');
         DB::table('users')->truncate();
 
         // generate 3 users/author
         $faker = Factory::create();
         DB::table('users')->insert([
             [
                 'name' => "Shahinul Haque",
                 'slug' => "shainul-haque",
                 'email' => "shahin@test.com",
                 'password' => bcrypt('123321'),
                  'bio' => $faker->text(rand(250, 300))
             ],
             [
                 'name' => "Tuhin Haque",
                 'slug' => "tuhin-haque",
                 'email' => "tuhin@test.com",
                 'password' => bcrypt('123321'),
                  'bio' => $faker->text(rand(250, 300))
             ],
             [
                 'name' => "Tithi Haque",
                 'slug' => "tithi-haque",
                 'email' => "tithi@test.com",
                 'password' => bcrypt('123321'),
                  'bio' => $faker->text(rand(250, 300))
             ],
         ]);
    }
}

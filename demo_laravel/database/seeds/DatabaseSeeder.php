<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(teamSeeder::class);
    }

}

class teamSeeder extends Seeder{

	public function run()
	{
		DB::table('teams')->insert([
			['name'=>'Team 1','description'=>"hello: ".str_random(5),'logo'=>'logo1.png', 'leader_id'=>'1'],
			['name'=>'Team 2','description'=>"hello: ".str_random(5),'logo'=>'logo2.png', 'leader_id'=>'2'],
			['name'=>'Team 3','description'=>"hello: ".str_random(5),'logo'=>'logo3.png', 'leader_id'=>'3'],
			['name'=>'Team 4','description'=>"hello: ".str_random(5),'logo'=>'logo4.png', 'leader_id'=>'1'],
			['name'=>'Team 5','description'=>"hello: ".str_random(5),'logo'=>'logo5.png', 'leader_id'=>'2'],
			['name'=>'Team 6','description'=>"hello: ".str_random(5),'logo'=>'logo6.png', 'leader_id'=>'3'],
			['name'=>'Team 7','description'=>"hello: ".str_random(5),'logo'=>'logo7.png', 'leader_id'=>'1'],
			['name'=>'Team 8','description'=>"hello: ".str_random(5),'logo'=>'logo8.png', 'leader_id'=>'2'],
			['name'=>'Team 9','description'=>"hello: ".str_random(5),'logo'=>'logo9.png', 'leader_id'=>'3'],
			['name'=>'Team 10','description'=>"hello: ".str_random(5),'logo'=>'logo10.png', 'leader_id'=>'1'],
			['name'=>'Team 11','description'=>"hello: ".str_random(5),'logo'=>'logo11.png', 'leader_id'=>'2'],
			['name'=>'Team 12','description'=>"hello: ".str_random(5),'logo'=>'logo12.png', 'leader_id'=>'3']
		]);
	}
}

class userSeeder extends Seeder{

	public function run()
	{
		DB::table('users')->insert([
			['name'=>'user 1','age'=>'6','email'=>str_random(5).'@gmail.com', 'password'=>bcrypt(123456)],
			['name'=>'user 2','age'=>'8','email'=>str_random(5).'@gmail.com', 'password'=>bcrypt('123456')],
			['name'=>'user 3','age'=>'10','email'=>str_random(5).'@gmail.com', 'password'=>bcrypt('123456')],
			['name'=>'user 4','age'=>'12','email'=>str_random(5).'@gmail.com', 'password'=>bcrypt('123456')],
			['name'=>'user 5','age'=>'14','email'=>str_random(5).'@gmail.com', 'password'=>bcrypt('123456')],
			['name'=>'user 6','age'=>'15', 'email'=>str_random(5).'@gmail.com', 'password'=>bcrypt('123456')],
			['name'=>'user 7','age'=>'17','email'=>str_random(5).'@gmail.com', 'password'=>bcrypt('123456')],
			['name'=>'user 8','age'=>'55','email'=>str_random(5).'@gmail.com', 'password'=>bcrypt('123456')],
			['name'=>'user 9','age'=>'33','email'=>str_random(5).'@gmail.com', 'password'=>bcrypt('123456')],
			['name'=>'user 10','age'=>'22','email'=>str_random(5).'@gmail.com', 'password'=>bcrypt('123456')],
			['name'=>'user 11','age'=>'19','email'=>str_random(5).'@gmail.com', 'password'=>bcrypt('123456')],
			['name'=>'user 12','age'=>'25','email'=>str_random(5).'@gmail.com', 'password'=>bcrypt('123456')]
		]);
	}
}

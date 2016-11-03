<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      self::seedUsers();
      $this->command->info('Tabla usuarios inicializada con datos!');
    }
    public function seedUsers(){
      DB::table('users')->delete();
      $u1 = new User;
	  $u1->id ='1';
      $u1->name ='Bidkar';
      $u1->first_name='Bidkar';
      $u1->last_name='Solis';
      $u1->sns_acc_id='Alejandro';
      $u1->email ='bid@gmail.com';
      $u1->password =bcrypt('123');
	  $u1->avatar_url ='img_user/usuario1.jpg';
	  $u1->country ='San Jose, Costa Rica';
      $u1->save();
      $u1 = new User;
	  $u1->id ='2';
      $u1->name ='Ale';
      $u1->first_name='Alejandro';
      $u1->last_name='Sanchez';
      $u1->sns_acc_id='Alejandro';
      $u1->email ='ale@gmail.com';
      $u1->password =bcrypt('123');
	  $u1->avatar_url ='img_user/usuario2.jpg';
	  $u1->country ='San Jose, Heredia';
      $u1->save();
    }
}

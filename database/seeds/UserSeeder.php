<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1;$i < 3; $i++)
        {
            DB::table('admins')->insert([
           
                [ 'name' => 'Aoun Hassan '.$i.'',
                'email' => 'admin'.$i.'@mail.com',
                'type' => '1',
                'password' => Hash::make('1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()],
            ]);   
        }
        DB::table('information')->insert([
            [ 
             'site_name' => 'Uniform Site',
             'phone' => '923030672683',
             'email' => 'aounhassan275@gmail.com',
             'about_us_content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
             'address' => 'Islamabad, Pakistan',
             'facebook' => 'https://www.facebook.com/',
             'instagram' => 'https://www.instagram.com/',
             'twitter' => 'https://twitter.com/',
             'pinterest' => 'https://pinterest.com/', 
             'youtube' => 'https://youtube.com/', 
             'logo' => '/uploaded_images/171663703641.jpg' ], 
        ]);
    }
}

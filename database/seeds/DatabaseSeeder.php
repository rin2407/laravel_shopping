<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            ['name'=>'hhh','email'=>'hash@gmail.com','email_verified_at'=>'2020-01-01 10:10:10','password'=>Hash::make('1234'),'remember_token'=>'wtww'],            
            ]);
            DB::table('colors')->insert([
                ['color_name'=>'Blue'],  
                ['color_name'=>'Red'],            
                ['color_name'=>'White'],                      
            ]);
            DB::table('sizes')->insert([
                ['size_name'=>'S'],  
                ['size_name'=>'M'],            
                ['size_name'=>'XL'],                      
            ]);
            DB::table('categories')->insert([
                ['category_name'=>'Coat'],  
                ['category_name'=>'Dress'],            
                ['category_name'=>'jacket'],
                ['category_name'=>'jeans'],                                            
            ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name'=> 'Html/Css'] ,
            ['name'=> 'Scala'],
            ['name'=> 'Swift'] ,
            ['name'=> 'Kotlin'] ,
            ['name'=> 'Vue Js'] ,
            ['name'=> 'Jquery'],
            ['name'=> 'Javascript'] ,
            ['name'=> 'Java'] ,
            ['name'=> 'Python'] ,
            ['name'=> 'Django'] ,
            ['name'=> 'Symfony'],
            ['name'=> 'Angular'] ,
            ['name'=> 'React'] ,
            ['name'=> 'Sql'] ,
            ['name'=> 'Flutter/Dart'] ,
            ['name'=> '.Net'] ,
            ['name'=> 'GraphQl'] ,
            ['name'=> 'Laravel'],
            ['name'=> 'Reseau Informatique'],
            ['name'=> 'Securite Informatique'],
            ['name'=> 'Maintenance Informatique'],
            ['name'=> 'Flutter/Dart'] ,
            ['name'=> 'TypeScript'] ,
            ['name'=> 'Langage C'] ,
            ['name'=> 'Wordpress'] ,
            ['name'=> 'Shotify'],
            ['name'=> 'Wordpress'] ,
            ['name'=> 'WooCommerce'] ,
        ]);
    }
}

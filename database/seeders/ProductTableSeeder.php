<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'title' => 'Course-1',
            'subtitle' => '4 разряда',
            'quantity_hours' => '200 ак.ч. 38 занятий',            
            'description' => '+ ПОДАРОК КОРРЕКЦИЯ И ОКРАШИВАНИЕ БРОВЕЙ (сертификат) + ДОСТУП К ЗАКРЫТОЙ ГРУППЕ С ВАКАНСИЯМИ + 20% СКИДКИ НА ЛЮБОЙ СЕМИНАР',
            'short_description' => '200 ак.ч. 38 занятий',
            'price' => 35000.0,
            'price_with_discount' => 29000.0,
            
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizza_list')->insert(array(
            array(
            'title' => 'Ветчина и грибы',
            'description' => 'Ветчина, шампиньоны, увеличинная порция моцареллы, томатный соус',
            'img' => './img/1.jpeg'
            ),
            array(
                'title' => 'Гавайская',
                'description' => 'Ветчина, ананасы, моцарелла, томатный соус',
                'img' => './img/2.jpeg'
            ),
            array(
                'title' => 'Двойной цыпленок',
                'description' => 'Цыпленок, моцарелла, соус альфредо',
                'img' => './img/3.jpeg'
            ),
            array(
                'title' => 'Пепперони',
                'description' => 'Пикантная пепперони, увеличенная порция моцареллы, томатный соус',
                'img' => './img/4.jpeg'
            ),
            array(
                'title' => 'Мясная',
                'description' => 'Цыпленок, ветичина, пикантная пеппирони, острая чоризо, моцарелла, томатный соус',
                'img' => './img/5.jpeg'
            ),
            array(
                'title' => 'Четрые сезона',
                'description' => 'Увеличенная морция моцереллы, ветчина, пикантная пеппирони, кубики брынзы, томаты, шампиньоны, итальянские травы, томатный соус',
                'img' => './img/6.jpeg'
            ),
        ));
    
    }
}

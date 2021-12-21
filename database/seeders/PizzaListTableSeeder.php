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
                'img' => './img/1.jpeg',
                'price' => '300'
            ),
            array(
                'title' => 'Гавайская',
                'description' => 'Ветчина, ананасы, моцарелла, томатный соус',
                'img' => './img/2.jpeg',
                'price' => '250'
            ),
            array(
                'title' => 'Двойной цыпленок',
                'description' => 'Цыпленок, моцарелла, соус альфредо',
                'img' => './img/3.jpeg',
                'price' => '460'
            ),
            array(
                'title' => 'Пепперони',
                'description' => 'Пикантная пепперони, увеличенная порция моцареллы, томатный соус',
                'img' => './img/4.jpeg',
                'price' => '320'
            ),
            array(
                'title' => 'Мясная',
                'description' => 'Цыпленок, ветичина, пикантная пеппирони, острая чоризо, моцарелла, томатный соус',
                'img' => './img/5.jpeg',
                'price' => '290'
            ),
            array(
                'title' => 'Четрые сезона',
                'description' => 'Увеличенная морция моцереллы, ветчина, пикантная пеппирони, кубики брынзы, томаты, шампиньоны, итальянские травы, томатный соус',
                'img' => './img/6.jpeg',
                'price' => '500'
            ),
        ));
    
    }
}

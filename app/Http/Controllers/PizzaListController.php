<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PizzaListController extends Controller
{
    public function getPizzaList(){
        $pizza_list = DB::table('pizza_list')->get();
        return $pizza_list;
    }
}

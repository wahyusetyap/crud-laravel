<?php

namespace app\Models;

use Illuminate\Support\Facades\DB;

class ItemModel{
    
    public static function get_all(){
        $items = DB::table('items')->get();
        return $items;
    }

    public static function save($data){
        $new_item = DB::teble('items')->insert($data);
        return $new_item;
    }

}
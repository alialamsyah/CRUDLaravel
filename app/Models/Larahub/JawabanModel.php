<?php

    namespace App\Models\Larahub;
    use Illuminate\Support\Facades\DB;

    class JawabanModel{
        public static function save($data, $id){
            $new_answers = DB::table('answers')->insert($data);
            return $new_answers;
        }
    }
<?php

    namespace App\Models\Larahub;
    use Illuminate\Support\Facades\DB;

    class PertanyaanModel{
        public static function get_all(){
            $asks = DB::table('asks')->get();
            return $asks;
        }
        public static function save($data){
            $new_ask = DB::table('asks')->insert($data);
            return $new_ask;
        }
        public static function find_by_id($id){
            $asks = DB::table('asks')->where('id', $id)->first();
            return $asks;
        }
        public static function update($id, $request){
            $item = DB::table('asks')
                        ->where('id', $id)
                        ->update([
                            'judul' => $request['judul'],
                            'isi' => $request['isi'],
                        ]);
            return $item;
        }
        public static function destroy($id){
            $deleted = DB::table('asks')
                        ->where('id', $id)
                        ->delete();
            return $deleted;
        }
        public static function get_all_detail($id){
            $answers = DB::table('answers')->where('pertanyaan_id', $id)->get();
            return $answers;
        }
        public static function get_asks($id){
            $asks = DB::table('asks')->where('id', $id)->get();
            return $asks;
        }
    }
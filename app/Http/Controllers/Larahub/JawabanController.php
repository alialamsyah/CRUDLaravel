<?php

namespace App\Http\Controllers\Larahub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Larahub\JawabanModel;

class JawabanController extends Controller
{
    public function create($id){
        return view('larahub.answers.create', ["id" => $id]);
    }
    public function store(Request $request, $id){
        $data = $request->all();
        unset($data["_token"]);
        $saveAnswer = JawabanModel::save($data,$id);
        if($saveAnswer){
            return redirect('/pertanyaan/'.$id);
        }
    }
}

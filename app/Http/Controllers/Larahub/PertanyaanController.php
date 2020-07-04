<?php

namespace App\Http\Controllers\Larahub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Larahub\PertanyaanModel;

class PertanyaanController extends Controller
{
    //
    public function index(){
        $asks = PertanyaanModel::get_all();
        return view('larahub.asks.index', compact('asks'));
    }

    public function create(){
        return view('larahub.asks.create');
    }

    public function store(Request $request){
        $data = $request->all();
        unset($data["_token"]);
        $saveAsks = PertanyaanModel::save($data);
        if($saveAsks){
            return redirect('/pertanyaan');
        }
    }

    public function show($id){
        $answers = PertanyaanModel::get_all_detail($id);
        $asks = PertanyaanModel::get_asks($id);
        // return dd($answers);
        return view('larahub.asks.detail', compact('answers'), compact('asks'));
    }

    public function edit($id){
        $ask = PertanyaanModel::find_by_id($id);
        return view('larahub.asks.edit', compact('ask'));
    }

    public function update(Request $request, $id){
        $ask = PertanyaanModel::update($id, $request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id){
        $ask = PertanyaanModel::destroy($id);
        return redirect('/pertanyaan');
    }
}

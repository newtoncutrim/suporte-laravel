<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support){
        $supports = $support->all();
        return view('admin.supports.index', compact('supports'));
    }

    public function create(){
        return view('admin.supports.create');
    }

    public function store(Request $request, Support $support){
        $data = $request->only(['subject', 'status', 'body']);
        if($support->create($data)){
            $support->save;
            return redirect()->route('supports.index');

        } else {
            return 'n deu';
        }
    }

    public function show(int|string $id, Request $request, Support $support){

        if(!$supports = $support->find($id)){
            return redirect()->back();
        }
        return view('admin.supports.show', compact('supports'));
    }
}

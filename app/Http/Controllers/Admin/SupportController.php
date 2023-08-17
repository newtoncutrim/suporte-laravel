<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCreateRequest;
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

    public function create_action(StoreCreateRequest $request, Support $support){

        /* $data = $request->only(['subject', 'status', 'body']); */
        /* usando medtodo  que recebe apenas os campos validadosS */
        $data = $request->validated();
        if(!$support->create($data)){
            return redirect()->back();
        }
        $support->save;
        return redirect()->route('supports.index');
    }

    public function show(int|string $id, Request $request, Support $support){

        if(!$supports = $support->find($id)){
            return redirect()->back();
        }
        return view('admin.supports.show', compact('supports'));
    }

    public function update_action(string|int $id, Request $request, Support $support){
        if(!$support = $support->find($id)){
            return redirect()->back();
        }

        return view('admin.supports.update', compact('support'));

    }

    public function update(string|int $id, StoreCreateRequest $request, Support $support){
        if(!$supportData = $support->find($id)){
            return redirect()->back();
        }

        /* $supportData->update($request->only([
            'subject', 'status', 'body'
        ])); */

        /* usando medtodo  que recebe apenas os campos validadosS */
        $supportData->update($request->validated());

        return redirect()->route('supports.index');
    }

    public function delete(string|int $id, Support $support){
        if(!$data = $support->find($id)){
            return redirect()->back();
        }

        $data->delete();
        return redirect()->route('supports.index');
    }
}



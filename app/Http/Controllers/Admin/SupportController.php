<?php

namespace App\Http\Controllers\Admin;

use App\DTO\Supports\CreateSupportDTO;
use App\DTO\Supports\UpdateSupportDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCreateRequest;
use App\Models\Support;
use App\Services\SupportService;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function __construct(protected SupportService $service)
    {}

    public function index(Request $request){
        $supports = $this->service->paginate(
            page: $request->get('page', 1),
            totalPerPage: $request->get('per_page', 1),
            filter: $request->filter
        );

        return view('admin.supports.index', compact('supports'));
    }

    public function create(){
        return view('admin.supports.create');
    }

    public function store(StoreCreateRequest $request){

        $this->service->new(
            CreateSupportDTO::makeFromRequest($request)
        );
        /* $data = $request->only(['subject', 'status', 'body']); */
        /* usando medtodo  que recebe apenas os campos validadosS */
        /* $data = $request->validated();
        if(!$support->create($data)){
            return redirect()->back();
        }
        $support->save; */
        return redirect()->route('supports.index');
    }

    public function show(string $id){

        if(!$supports = $this->service->findOne($id)){
            return redirect()->back();
        }
        return view('admin.supports.show', compact('supports'));
    }

    public function update(string $id){

        if(!$support = $this->service->findOne($id)){
            return redirect()->back();
        }

        return view('admin.supports.update', compact('support'));

    }

    public function edit(StoreCreateRequest $request){
        $supportData = $this->service->update(
            UpdateSupportDTO::makeFromRequest($request)
        );

        if(!$supportData){
            return redirect()->back();
        }

        /* $supportData->update($request->only([
            'subject', 'status', 'body'
        ])); */

        /* usando medtodo  que recebe apenas os campos validadosS */

        return redirect()->route('supports.index');
    }

    public function destroy(string $id){
        $this->service->delete($id);

        return redirect()->route('supports.index');
    }
}



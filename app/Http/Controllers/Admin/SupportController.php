<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use Illuminate\Http\Request;
use App\Models\Support;
use App\Services\SupportService;

class SupportController extends Controller
{
    public function __construct(
        protected SupportService $service
    )
    {
        
    }

    
    public function index (Request $request)
    {
        $supports = $this->service->getAll($request->filter);

        return view('admin.supports.index', compact('supports'));
    }

    
    public function show(string $id)
    {
        if(!$support = $this->service->findOne($id)) {
            return back();
        }

        return view('admin.supports.show', compact('support'));
    }

    
    public function create()
    {
        return view('admin.supports.create');
    }

    
    public function store(StoreUpdateSupport $r, Support $s) 
    {
        $this->service->new(); 
        
        
        return redirect(route('supports.index'));
    }

    
    public function edit(string $id)
    {
        if(!$support = $this->service->findOne($id)) {
            return back();
        }

        return view('admin.supports.edit', compact('support'));
    }

    
    public function update(StoreUpdateSupport $r, Support $s, string|int $id)
    {   
        if(!$support = $s->where('id', '=', $id)->first()) {
            return back();
        }

        $support->update($r->validated());

        return redirect(route('supports.show', $support->id));
    }

    
    public function destroy(string $id)
    {
       
        $this->service->delete($id);

        return redirect(route('supports.index'));

    }
}

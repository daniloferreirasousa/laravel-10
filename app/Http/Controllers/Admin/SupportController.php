<?php

namespace App\Http\Controllers\Admin;

use App\DTO\Supports\{
    CreateSupportDTO,
    UpdateSupportDTO
};
use App\Http\Controllers\Controller;
use App\Http\Requests\{StoreUpdateSupport};
use Illuminate\Http\Request;
use App\Models\Support;
use App\Services\SupportService;

class SupportController extends Controller
{
    public function __construct(
        protected SupportService $service
    ) {}


    public function index (Request $request)
    {
        $supports = $this->service->paginate(
            page: $request->get('page', 1),
            totalPerPage: $request->get('per_page', 10),
            filter: $request->filter,
        );

        $filters = ['filter' => $request->get('filter', '')];

        return view('admin.supports.index', compact('supports', 'filters'));
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
        $this->service->new(
            CreateSupportDTO::makeFromRequest($r)
        );

        return redirect()
                ->route('supports.index')
                ->with('message', 'Cadastrado com Sucesso!');
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

        return redirect()
                    ->route('supports.index')
                    ->with('messasge', 'Atualizado com Sucesso!');
    }


    public function destroy(string $id)
    {

        $this->service->delete($id);

        return redirect(route('supports.index'));

    }
}

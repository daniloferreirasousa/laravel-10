<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use Illuminate\Http\Request;
use App\Models\Support;

class SupportController extends Controller
{
    /**
     * Listagem dos Supportes criados
     *
     * @param Support $support
     * @return void
     */
    public function index(Support $support)
    {
        $supports = $support->all();

        return view('admin.supports.index', compact('supports'));
    }

    /**
     * Exibição de um suporte específico
     * 
     * @param string|integer $id
     */
    public function show(string | int $id)
    {
        if(!$support = Support::find($id)) {
            return back();
        }

        return view('admin.supports.show', compact('support'));
    }

    /**
     * Exibição da view de criação de Suporte
     *
     * @return void
     */
    public function create()
    {
        return view('admin.supports.create');
    }

    /**
     * Criação de um novo Suporte
     *
     * @param StoreUpdateSupport $r
     * @param Support $s
     * @return void
     */
    public function store(StoreUpdateSupport $r, Support $s) {
        $data = $r->only(['subject', 'body']);
        $data['status'] = 'a';

        $s->create($data);
        
        return redirect(route('supports.index'));
    }

    /**
     * Exibiçõa da view de edição do Suporte
     *
     * @param Support $s
     * @param string|integer $id
     * @return void
     */
    public function edit(Support $s, string|int $id)
    {
        if(!$support = $s->where('id', '=', $id)->first()) {
            return back();
        }

        return view('admin.supports.edit', compact('support'));
    }

    /**
     * Atualização do Support
     *
     * @param StoreUpdateSupport $r
     * @param Support $s
     * @param string|integer $id
     * @return void
     */
    public function update(StoreUpdateSupport $r, Support $s, string|int $id)
    {   
        if(!$support = $s->where('id', '=', $id)->first()) {
            return back();
        }

        $support->update($r->only([
            'subject', 'body'
        ]));

        return redirect(route('supports.show', $support->id));
    }

    /**
     * Exclusão de um Suporte selecionado
     *
     * @param Support $s
     * @param string|integer $id
     * @return void
     */
    public function destroy(Support $s, string|int $id)
    {
        if(!$support = $s->find($id)) {
            return back();
        }

        $support->delete();

        return redirect(route('supports.index'));

    }
}

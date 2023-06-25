@extends('admin.supports.layouts.layout')

@section('title', 'Suportes')

@section('content')

<h1>Listagem dos Suportes</h1>

<a href="{{route('supports.create')}}">Criar Dúvida</a>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
    </thead>
    <tbody>

        {{-- {{dd($supports)}} --}}

        @foreach($supports->items() as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ getStatusSupport($support->status) }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    <a href="{{ route('supports.show', $support->id) }}">ver</a>
                </td>
                <td>
                    <a href="{{ route('supports.edit', $support->id) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<x-pagination
    :paginator="$supports"
    :appends="$filters"
/>

@endsection
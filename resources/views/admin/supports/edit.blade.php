@extends('admin.layouts.app')

@section('title', 'Editar dúvida')

@section('header')
    <h1 class="text-lg text-black-500"><b>Dúvida:</b> {{ $support->subject }}</h1>
@endsection

@section('content')
<form action="{{ route('supports.update', $support->id) }}" method="POST">
    @csrf
    @method('PUT')

    @include('admin.supports.partials.form', [
        'support' => $support
    ])
</form>
@endsection

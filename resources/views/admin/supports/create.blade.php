@extends('admin.layouts.app')

@section('title', 'Criar Novo Tópico')

@section('header')
    <h1 class="text-lg text-black-500">Cadastrar Dúvida</h1>
@endsection

@section('content')
    <form action="{{ route('supports.store') }}" method="POST">
        @csrf
        @method('POST')

        @include('admin.supports.partials.form')
    </form>
@endsection

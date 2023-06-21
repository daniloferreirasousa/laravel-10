<h1>Nova Dúvida</h1>

<x-alert/>

<form action="{{ route('supports.store') }}" method="POST">
    @csrf
    @method('POST')

    @include('admin.supports.psrtials.form')
</form>
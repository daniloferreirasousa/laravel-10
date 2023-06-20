<h1>Nova Dúvida</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>    
@endif

<form action="{{ route('supports.store') }}" method="POST">
    @csrf
    @method('POST')

    <input type="text" name="subject" placeholder="Assunto">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição"></textarea>
    <button type="submit">Criar</button>
</form>
<h1>Editar Dúvida {{ $support->id }}</h1>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error}} </li>
        @endforeach
    </ul>
@endif

<form action="{{ route('supports.update', $support->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="subject" placeholder='Assunto' value="{{ $support->subject }}">
    <textarea name="body" cols="30" rows="5">{{ $support->body }}</textarea>
    <input type="submit" value="Editar">
</form>
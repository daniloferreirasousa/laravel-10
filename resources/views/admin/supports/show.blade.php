<h1>Detalhes da Dúvida {{ $support->id }}</h1>
<a href="{{ route('supports.index') }}">Página inicial</a>
<ul>
    <li>Assunto: {{ $support->subject }}</li>
    <li>Status: {{ $support->status }}</li>
    <li>Descrição: {{ $support->body }}</li>
</ul>

<form action="{{ route('supports.destroy', $support->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <input type="submit" value="Deletar">
</form>
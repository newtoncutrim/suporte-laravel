<h1>Detalhes da duvida {{$supports->id}}</h1>

<ul>
    <li>Assunto: {{$supports->subject}}</li>
    <li>Status: {{$supports->status}}</li>
    <li>Mensagem: {{$supports->body}}</li>
</ul>

<a href="{{route('supports.index')}}">home</a>

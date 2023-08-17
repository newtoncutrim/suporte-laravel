<a href="{{route('supports.index')}}">index</a>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário</title>
</head>
<body>

<h2>Formulário de Contato</h2>
@if ($errors->any())
@foreach($errors->all() as $error)
    {{$error}}
@endforeach
@endif

<form action="{{route('supports.update_action', $support->id)}}" method="post">
    @csrf
    @method('put')
    <label for="subject">Assunto:</label>
    <input type="text" id="subject" name="subject" value="{{$support->subject}}">
    <br><br>

    <label for="status">Status:</label>
    <select id="status" name="status" >
        <option value="a" {{$support->status == "a" ? "selected" : ''}}>Opção A</option>
        <option value="p" {{$support->status == "p" ? "selected" : ''}}>Opção P</option>
        <option value="c" {{$support->status == "c" ? "selected" : ''}}>Opção C</option>
    </select>
    <br><br>

    <label for="body">Mensagem:</label>
    <textarea id="body" name="body" rows="4" cols="50" >{{$support->body}}</textarea>
    <br><br>

    <input type="submit" value="Enviar">
</form>

</body>
</html>

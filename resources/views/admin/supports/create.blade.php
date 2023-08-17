<a href="{{route('supports.index')}}">index</a>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário</title>
</head>
<body>


<h2>Formulário de Cadastro</h2>
@if ($errors->any())
@foreach($errors->all() as $error)
    {{$error}}
@endforeach
@endif
<form action="{{route('supports.create_action')}}" method="post">
    @csrf
    <label for="subject">Assunto:</label>
    <input type="text" id="subject" name="subject" value="{{old('subject')}}">
    <br><br>

    <label for="status">Status:</label>
    <select id="status" name="status">
        <option value="a">Opção A</option>
        <option value="p">Opção P</option>
        <option value="c">Opção C</option>
    </select>
    <br><br>

    <label for="body">Mensagem:</label>
    <textarea id="body" name="body" rows="4" cols="50">{{old('body')}}</textarea>
    <br><br>

    <input type="submit" value="Enviar">
</form>

</body>
</html>
``

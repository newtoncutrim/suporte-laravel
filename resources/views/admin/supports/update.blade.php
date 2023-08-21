<a href="{{route('supports.index')}}">index</a>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário</title>
</head>
<body>

<h2>Formulário de Contato</h2>
<x-alert/>

<form action="{{route('supports.edit', $support->id)}}" method="post">
    @csrf
    @method('put')
    @include('admin.supports.partials.form', ['support' => $support])
</form>

</body>
</html>

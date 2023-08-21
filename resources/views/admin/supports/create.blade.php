<a href="{{route('supports.index')}}">index</a>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário</title>
</head>
<body>


<h2>Formulário de Cadastro</h2>
<x-alert/>
<form action="{{route('supports.create_action')}}" method="post">
    @csrf
    @method('post')
    @include('admin.supports.partials.form')
</form>

</body>
</html>
``

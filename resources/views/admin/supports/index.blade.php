@extends('admin.template.template')


@section('title', 'Listagem')
@section('header')
    <h1><b>listagem de supports</b> </h1>
@endsection

@section('content')
<h1><a href="{{route('supports.store')}}">Criar Duvida</a></h1>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>

    </thead>
    <tbody>
        @foreach ($supports->items() as $support )
            <tr>
                <td>{{$support->subject}}</td>
                <td>{{getStatussupport($support->status)}}</td>
                <td>{{$support->body}}</td>
                <td>
                    <a href="{{route('supports.show', [$support->id])}}">detalhes</a>
                </td>
                <td>
                    <a href="{{route('supports.update_action', $support->id)}}">editar</a>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
<x-paginate :paginator="$supports"/>


@endsection

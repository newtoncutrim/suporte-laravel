<h1>listagem de supports </h1>
<h1><a href="{{route('supports.store')}}">Criar Duvida</a></h1>

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>

    </thead>
    <tbody>
        @foreach ($supports as $support )
            <tr>
                <td>{{$support->subject}}</td>
                <td>{{$support->status}}</td>
                <td>{{$support->body}}</td>
                <td>
                    <a href="{{route('supports.show', [$support->id])}}">detalhes</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

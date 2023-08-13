<h1>listagem de supports {{count($supports)}}</h1>
<h1><a href="{{route('supports.create')}}">Criar Duvida</a></h1>

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
            </tr>
        @endforeach

    </tbody>
</table>

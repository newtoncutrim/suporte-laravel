<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .interaction-avatar {
            width: 30px;
            height: 30px;
        }
    </style>
    <title>Tabela de Dúvidas</title>
</head>
<body class="bg-gray-100">
    @php
    $avatars = [
        'https://api.multiavatar.com/JohnDoe.svg',
        'https://api.multiavatar.com/JaneSmith.svg',
        'https://api.multiavatar.com/EmilyJohnson.svg',
        'https://api.multiavatar.com/MichaelWilliams.svg',
        'https://api.multiavatar.com/DavidBrown.svg',
        'https://api.multiavatar.com/SarahDavis.svg',
        'https://api.multiavatar.com/RobertWilson.svg',
        'https://api.multiavatar.com/LindaMartinez.svg',
        'https://api.multiavatar.com/WilliamJackson.svg',
        'https://api.multiavatar.com/NicoleAnderson.svg',
    ];
    @endphp
    <div class="bg-white rounded-lg w-full p-6 shadow-md">
        <div class="flex justify-between mb-4">
            <h2 class="text-xl font-semibold">Dúvidas</h2>
        </div>

        <div class="bg-gray-900 text-white p-4 rounded-lg mb-4">
            <table class="w-full table-fixed">
                <thead>
                    <tr>
                        <th class="w-1/4 text-left font-semibold p-2">Assunto</th>
                        <th class="w-1/4 text-center font-semibold p-2">Ativa</th>
                        <th class="w-1/4 text-left font-semibold p-2">Comentário</th>
                        <th class="w-1/4 text-center font-semibold p-2">Interações</th>
                        <th class="w-1/4 text-center font-semibold p-2"></th> <!-- Coluna da seta -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($supports->items() as $support )
                    <tr>
                        <td class="p-2">
                            {{$support->subject}}
                        </td>
                        <td class="text-center p-2">
                            {{getStatussupport($support->status)}}
                        </td>
                        <td class="p-2">
                            {{$support->body}}
                        </td>
                        <td class="flex items-center space-x-1 p-2">
                            @for ($i = 0; $i < 5; $i++)
                                <div class="interaction-avatar">
                                    <img src="{{ $avatars[array_rand($avatars)] }}" alt="Avatar {{ $i + 1 }}" class="w-full h-full rounded-full">
                                </div>
                            @endfor
                        </td>
                        <td class="text-center p-3 ">
                            <a href="{{route('supports.edit', [$support->id])}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
                            <a href="{{route('supports.show', [$support->id])}}" class="text-blue-500 text-2x1">→</a>

                        </td>
                    </tr>
                    @endforeach
                    <!-- ... Adicione mais linhas de perguntas aqui ... -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

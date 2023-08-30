<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Detalhes da Dúvida</title>
</head>
<body class="bg-gray-100">
    <div class="bg-white rounded-lg w-full p-6 shadow-md">
        <div class="bg-blue-600 text-white py-2 px-4 rounded-t-lg">
            <h1 class="text-xl font-semibold">Detalhes da Dúvida {{$supports->id}}</h1>
        </div>

        <ul class="py-4 px-6 border rounded-b-lg bg-white mt-4">
            <li><strong>Assunto:</strong> {{$supports->subject}}</li>
            <li><strong>Status:</strong> {{$supports->status}}</li>
            <li><strong>Mensagem:</strong> {{$supports->body}}</li>
        </ul>

        <form action="{{route('supports.delete', $supports->id)}}" method="post" class="mt-4">
            @csrf
            @method('delete')
            <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">Apagar</button>
        </form>

        <a href="{{route('supports.index')}}" class="mt-4 inline-block text-blue-500 hover:underline">Voltar para a página inicial</a>
    </div>
</body>
</html>

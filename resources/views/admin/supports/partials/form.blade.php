<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Editar Detalhes da Dúvida</title>
</head>
<body class="bg-gray-100">
    <div class="bg-white rounded-lg w-full p-6 shadow-md">
        <form action="{{route('supports.edit', [$support->id])}}" method="post" class="space-y-4">
            @csrf

            <div class="space-y-2">
                <label for="subject" class="block font-medium">Assunto:</label>
                <input type="text" id="subject" name="subject" value="{{$support->subject ?? old('subject')}}" class="w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200">
            </div>

            <div class="space-y-2">
                <label for="status" class="block font-medium">Status:</label>
                <select id="status" name="status" class="w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200">
                    <option value="a" {{isset($support->status) == "a" ? "selected" : ''}}>Opção A</option>
                    <option value="p" {{isset($support->status) == "p" ? "selected" : ''}}>Opção P</option>
                    <option value="c" {{isset($support->status) == "c" ? "selected" : ''}}>Opção C</option>
                </select>
            </div>

            <div class="space-y-2">
                <label for="body" class="block font-medium">Mensagem:</label>
                <textarea id="body" name="body" rows="4" class="w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200">{{$support->body ?? old('body')}}</textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Enviar</button>
        </form>
    </div>
</body>
</html>

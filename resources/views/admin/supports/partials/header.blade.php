<div>
    <div class="flex items-center gap-x-3">
        <h1 class="text-lg text-black-500">Fórum</h1>
        <span class="px-3 py-1 text-xs bg-blue-300 rounded-full shadow">{{$supports->total()}} Dúvidas</span>
    </div>

</div>

<div class="mt-4">
    <form action="{{route('supports.index')}}" method="GET" class="flex items-center">
        <input type="text" name="filter" value="{{$filters['filter'] ?? ''}}" placeholder="Buscar dúvidas" class="px-3 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring focus:border-blue-500 flex-1">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r-md">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l6-6M9 15l6-6-6 6-6-6 6 6z" />
            </svg>
        </button>
    </form>
</div>


<div class="flex items-center mt-4 gap-x-3">
    <a href="{{ route('supports.store') }}" class="flex items-center justify-center w-1/2 px-3 py-1 bg-blue-500 text-white rounded">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
        </svg>
        <span>Nova Dúvida</span>
    </a>

</div>

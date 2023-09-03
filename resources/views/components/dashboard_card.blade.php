<div class="bg-gray-100 dark:bg-gray-800 shadow-md rounded px-8 pt-4 pb-4 mb-4 mr-3 text-gray-500 dark:text-gray-50
            box-content w-20">
        <div class="flex">
            <div class="icon">
                {{ $slot}}
            </div>
            <div>
                <p class="text-2xl mx-5 flex space-x-1 space-y-0">{{$cantidad}}</p>
            </div>
        </div>
    <div class="content">
        {{-- <h3>{{ 'hola' }}</h3> --}}
        
        <h3 class="text-gray-800 text-left">{{$title}}</h3>
        {{-- <p>{{ $description }}</p> --}}
        {{-- <p>{{ '8 Cantidad' }}</p> --}}
    </div>
</div>
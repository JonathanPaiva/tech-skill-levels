<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" >
            <a>Temas</a>
            <a class="ml-4" href="themes/create">Novo</a>
        </h2>
    </x-slot>
    
    <div class="shadow mt-1">
        <div class="m-1">
            <a href="" class="btn btn-success">Teste</a>
        </div>
            <div class="m-3">
                @foreach ($themes as $t)
                    <ul>
                        <li>{{$t->name}}</li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
    
</x-app-layout>
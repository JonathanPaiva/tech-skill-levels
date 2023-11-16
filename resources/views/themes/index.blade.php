<x-app-layout>

    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <div class="">
                <a href="/" class="btn btn-sm btn-secondary">Voltar</a>
            </div>
            <div class="p-1">
                <span class="fw-bold">Listagem de Temas:</span>
            </div>
            <div class="">
                <a href="themes/create" class="btn btn-sm btn-primary">Novo</a>
            </div>
        </div>
    </x-slot>

    <div class="mt-1 p-md-3">
        @foreach ($themes as $t)
            <ul>
                <li>{{$t->name}}</li>
            </ul>
        @endforeach
    </div>

</x-app-layout>
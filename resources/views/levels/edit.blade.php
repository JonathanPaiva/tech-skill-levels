<x-app-layout>

    <x-slot name="header">
        <div class="container">
            <div class="p-1 text-center">
                <h2 class="fw-bold">Editando Nível:</h2>
            </div>
        </div>
    </x-slot>

    <div class="mt-1 p-md-3">
        <div class="container">
            <form action="{{ route('levels.update', ['id' => $level->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="mb-2 fw-bold ">
                    <label for="name" class="form-label">ID:</label>
                    <span class="input-group-text">{{ $level->id }}</span>
                </div>
    
                <div class="mb-2">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="input-group-text" class="form-control" id="name" name="name"
                            placeholder="Digite o nome do Nível" value="{{ $level->name }}"
                            required>
                </div>                
                <div>
                    <button type="submit btn" class="btn btn-success">
                        Salvar
                    </button>
                    <a class="btn btn-secondary align-baseline" href="{{ route('levels') }}">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
    
</x-app-layout>
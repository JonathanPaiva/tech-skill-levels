<x-app-layout>

    <x-slot name="header">
        <div class="container">
            <div class="p-1 text-center">
                <h2 class="fw-bold">Editando Tema:</h2>
            </div>
        </div>
    </x-slot>

    <div class="mt-1 p-md-3">
        <div class="container">
            <form action="{{ route('themes.update', ['id' => $theme->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="mb-2 fw-bold ">
                    <label for="name" class="form-label">ID:</label>
                    <span class="input-group-text">{{ $theme->id }}</span>
                </div>
    
                <div class="mb-2">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="input-group-text" class="form-control" id="name" name="name"
                            placeholder="Digite o nome do Contato" value="{{ $theme->name }}"
                            required>
                </div>                
                <div>
                    <button type="submit btn" class="btn btn-success">
                        Salvar
                    </button>
                    <a class="btn btn-secondary align-baseline" href="{{ route('themes') }}">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
    
</x-app-layout>
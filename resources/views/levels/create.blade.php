<x-app-layout>

    <x-slot name="header">
        <div class="container">
            <div class="p-1 text-center">
                <h2 class="fw-bold">Informe o Nível:</h2>
            </div>
        </div>
    </x-slot>

    <div class="mt-1 p-md-3">
        <div class="container">
            <form action="{{ route('levels.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="input-group-text" class="form-control" id="name" name="name" placeholder="Digite o Nível" required>
                </div>
                <div>
                    <button type="submit btn" class="btn btn-success">
                        Salvar
                    </button>
                    <a type="button btn" class="btn btn-secondary" href="{{ route('levels') }}">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
   
</x-app-layout>
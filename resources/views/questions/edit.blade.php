<x-app-layout>

    <x-slot name="header">
        <div class="container">
            <div class="p-1 text-center">
                <h2 class="fw-bold">Editando Pergunta:</h2>
            </div>
        </div>
    </x-slot>

    <div class="mt-1 p-md-3">
        <div class="container">
            <form action="{{ route('questions.update', ['id' => $question->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="mb-2 fw-bold ">
                    <label for="name" class="form-label">ID:</label>
                    <span class="input-group-text">{{ $question->id }}</span>
                </div>
    
                <div class="mb-2">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="input-group-text" class="form-control" id="question" name="question"
                            placeholder="Digite a Pergunta" value="{{ $question->question }}"
                            required>
                </div>
                
                <div class="mb-2">
                    <label for="name" class="form-label">Tema:</label>
                    <select class="form-control" name="theme_id" required>
                        <option value="" selected>Informe o Tema</option>
                        @foreach ($themes as $theme)
                            <option value="{{ $theme->id }}" {{ $question->theme_id == $theme->id ? 'selected' : '' }}>
                                {{ $theme->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="mb-2">
                    <label for="name" class="form-label">Nível:</label>
                    <select class="form-control" name="level_id" required>
                        <option value="" selected>Informe o Nível</option>
                        @foreach ($levels as $level)
                            <option value="{{ $level->id }}" {{ $question->level_id == $level->id ? 'selected' : '' }}>
                                {{ $level->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <button type="submit btn" class="btn btn-success">
                        Salvar
                    </button>
                    <a class="btn btn-secondary align-baseline" href="{{ route('questions') }}">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
    
</x-app-layout>
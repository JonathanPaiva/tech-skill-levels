<x-app-layout>

    <x-slot name="header">
        <div class="container">
            <div class="p-1 text-center">
                <h2 class="fw-bold">Nova Pergunta:</h2>
            </div>
        </div>
    </x-slot>

    <div class="mt-1 p-md-3">
        <div class="container">
            <form action="{{ route('questions.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="name" class="form-label">Pergunta:</label>
                    <input type="input-group-text" class="form-control" id="name" name="name" placeholder="Digite a Pergunta" required>
                </div>
                <div class="mb-2">
                    <label for="name" class="form-label">Tema:</label>
                    <input type="input-group-text" class="form-control" id="name" name="name" placeholder="Informe o Tema" required>

                    <br>

                    <div class="input-group mb-3">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                          <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    </div>

                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                </div>
                <div class="mb-2">
                    <label for="name" class="form-label">Nível:</label>
                    <input type="input-group-text" class="form-control" id="name" name="name" placeholder="Informe o Nível" required>
                </div>
                <div>
                    <button type="submit btn" class="btn btn-success">
                        Salvar
                    </button>
                    <a type="button btn" class="btn btn-secondary" href="{{ route('questions') }}">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
   
</x-app-layout>
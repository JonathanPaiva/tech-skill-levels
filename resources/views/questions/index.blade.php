<x-app-layout>

    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <div class="">
                <a href="/" class="btn btn-sm btn-secondary">Voltar</a>
            </div>
            <div class="p-1">
                <span class="fw-bold">Listagem de Perguntas:</span>
            </div>
            <div class="">
                <a href="{{ route('questions.create')}}" class="btn btn-sm btn-primary">Novo</a>
            </div>
        </div>
    </x-slot>

    <div class="mt-1 p-md-3">

            <table class="table table-striped table-hover align-baseline table-bordered">

                <thead>
                    <tr>
                      <th scope="col" class="">Nome:</th>
                      <th scope="col" class="">Tema:</th>
                      <th scope="col" class="">Nível:</th>
                      <th scope="col" class="">Ações:</th>
                    </tr>
                </thead>
        
               <tbody>
        
                @foreach ($questions as $question)
        
                <tr>
                    <td>
                        <span>
                            {{ $question->question }}
                        </span> 
                    </td>

                    <td>
                        <span>
                            {{ $question->theme->name }}
                        </span> 
                    </td>

                    <td>
                        <span>
                            {{ $question->level->name }}
                        </span> 
                    </td>
                    
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('questions.edit', ['id' => $question->id])}}" class="btn btn-primary me-1">
                                Editar
                            </a>
                                    
                            <form action="{{ route('questions.destroy', ['id' => $question->id])}}" method="post"> 
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit btn" data-bs-toggle="modal" data-bs-target="#modalquestionsDelete-{{$question->id}}">
                                    Excluir
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
        
                @endforeach
        
                </tbody>
        
            </table>
        
    </div>

</x-app-layout>
<x-app-layout>

    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <div class="">
                <a href="/" class="btn btn-sm btn-secondary">Voltar</a>
            </div>
            <div class="p-1">
                <span class="fw-bold">Listagem de Níveis:</span>
            </div>
            <div class="">
                <a href="{{ route('levels.create')}}" class="btn btn-sm btn-primary">Novo</a>
            </div>
        </div>
    </x-slot>

    <div class="mt-1 p-md-3">

            <table class="table table-striped table-hover align-baseline table-bordered">

                <thead>
                    <tr>
                      <th scope="col" class="">Nome:</th>
                      <th scope="col" class="">Ações:</th>
                    </tr>
                </thead>
        
               <tbody>
        
                @foreach ($levels as $level)
        
                <tr>
                    <td>
                        <span>
                            {{ $level->name }}
                        </span> 
                    </td>
                    
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('levels.edit', ['id' => $level->id])}}" class="btn btn-primary me-1">
                                Editar
                            </a>
                                    
                            <form action="{{ route('levels.destroy', ['id' => $level->id])}}" method="post"> 
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit btn" data-bs-toggle="modal" data-bs-target="#modallevelsDelete-{{$level->id}}">
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
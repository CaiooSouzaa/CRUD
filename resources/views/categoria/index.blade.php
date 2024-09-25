@section('admin_template')
    @extends('admin_layout.index')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Categorias</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">categorias</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                lista de categorias
            </div>
            <div class = "card-body">
                <div class="row">
                    <div class="col-md-4">
                        <a href="" class = "btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            NOVO
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Opção</th>
                    </thead>

                    <tbody>
                        @foreach ($categorias as $linha)
                            <tr>
                                <td>{{ $linha->id }}</td>
                                <td>{{ $linha->cat_nome }}</td>
                                <td>{{ $linha->cat_descricao }}</td>
                                <td>
                                    <a href='{{ route('categoria_ex', ['id' => $linha->id]) }}' class='btn btn-danger'>
                                        <span class='fa fa-trash'></span>
                                    </a>
                                    |
                                    <a href='{{ route('categoria_upd', ['id' => $linha->id]) }}' class='btn btn-success'>
                                        <span class='fa fa-pencil'></span>
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="/categoria">
                    @csrf <!--colocar quando tiver formulario-->
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nova categoria</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="cat_nome" id="cat_nome"
                                placeholder="Digite o nome">
                            <label for="floatingInput">Nome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="cat_descricao" id="cat_descricao"
                                placeholder="Digite o nome da categoria">
                            <label for="floatingInput">Categoria</label>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submite" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

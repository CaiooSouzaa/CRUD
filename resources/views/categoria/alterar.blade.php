@extends('admin_layout.index')

@section('admin_template')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Categorias</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">categorias</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Id categoria: {{$categoria-> id}}
            </div>
            <div class="modal-content">
                <!--colocar /upd em action para pegar -->
                <form method="POST" action="/categoria/upd">
                    @csrf <!--colocar quando tiver formulario-->
                    <div class="modal-body">
                        <input type="text" name="id" value="{{ $categoria->id }}" />
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="cat_nome" id="cat_nome"
                                placeholder="Digite o nome" value="{{ $categoria->cat_nome }}"/>
                            <label for="floatingInput">Nome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="cat_descricao" id="cat_descricao"
                                placeholder="Digite o nome da categoria" value="{{ $categoria->cat_descricao }}">
                            <label for="floatingInput">Categoria</label>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submite" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
            <div class = "card-body">
            </div>
        </div>
    </div>
@endsection

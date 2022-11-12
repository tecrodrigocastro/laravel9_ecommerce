@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3> Adicionar Categoria
                        <a href="{{ url('admin/category/create') }}"
                            class="btn btn-primary btn-sm text-white float-end">VOLTAR</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Nome</label>
                                <input type="text" name="name" class="form-control" />
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Slug</label>
                                <input type="text" name="slug" class="form-control" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Descrição</label>
                                <textarea rows="3" name="description" class="form-control"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Imagem</label>
                                <input type="file" name="image" class="form-control" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Status</label>
                                <input type="checkbox" name="status" />
                            </div>

                            <div class="col-md-12">
                                <h4>SEO Tags</h4>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Titulo</label>
                                <input type="text" name="meta_title" class="form-control" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Palavra-Chave</label>
                                <textarea rows="3" name="meta_keyword" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Descrição</label>
                                <textarea rows="3" name="meta_description" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary float-end">Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3> Editar Categoria
                        <a href="{{ url('admin/category') }}" class="btn btn-primary btn-sm text-white float-end">VOLTAR</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/category/'. $category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Nome</label>
                                <input type="text" name="name" value="{{ $category->name }}" class="form-control" />
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Slug</label>
                                <input type="text" name="slug" value="{{ $category->slug }}" class="form-control" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Decrição</label>
                                <textarea rows="3" name="description" class="form-control">{{ $category->description }}</textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Imagem</label>
                                <input type="file" name="image" class="form-control" />
                                <img src="{{ asset('/uploads/category/' . $category->image) }}" width="100px"
                                    height="80px" >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Status</label>
                                <input type="checkbox" name="status" {{ $category->status == '1' ? 'checked' : '' }} />
                            </div>

                            <div class="col-md-12">
                                <h4>SEO Tags</h4>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Titulo</label>
                                <input type="text" name="meta_title" value="{{ $category->meta_title }}"
                                    class="form-control" />
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Palavra-Chave</label>
                                <textarea rows="3" name="meta_keyword" class="form-control">{{ $category->meta_keyword }}</textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label>Meta Descrição</label>
                                <textarea rows="3" name="meta_description" class="form-control">{{ $category->meta_description }}</textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary float-end">Atualizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3> Editar Slider
                        <a href="{{ url('admin/sliders/') }}" class="btn btn-warning btn-sm text-white float-end">VOLTAR</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/sliders/' . $slider->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT');
                        <div class="mb-3">
                            <label for="">Titulo</label>
                            <input type="text" name="title" value="{{ $slider->title }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Descrição</label>
                            <textarea name="description" class="form-control" rows="3">{{ $slider->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">Imagem</label>
                            <input type="file" name="image" class="form-control">
                            <img src="{{ asset("$slider->image") }}" alt="" style="width:50px; heigth:50px">
                        </div>
                        <div class="mb-3">
                            <label for="">Status</label> <br />
                            <input type="checkbox" name="status" {{ $slider->status == '1' ? 'checked' : '' }}
                                style="width: 20px; height: 20px;">Marcado=Escondido, Desmarcado=Visivel
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

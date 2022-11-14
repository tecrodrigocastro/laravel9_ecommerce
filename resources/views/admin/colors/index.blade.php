@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3> Cores
                        <a href="{{ url('admin/colors/create') }}"
                            class="btn btn-primary btn-sm text-white float-end">Adicionar Cor</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome da Cor</th>
                                <th>Codigo da Cor</th>
                                <th>Status</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($colors as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->code }}</td>
                                    <td>{{ $item->status == 1 ? 'Escondido' : 'Visivel' }}</td>
                                    <td>
                                        <a href="{{ url('admin/colors/' . $item->id . '/edit') }}"
                                            class="btn btn-primary">Editar</a>
                                        <a href="{{ url('admin/colors/' . $item->id . '/delete') }}" class="btn btn-danger"
                                            onclick="return confirm('Tem certeza de que deseja excluir esses dados?')">Deletar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

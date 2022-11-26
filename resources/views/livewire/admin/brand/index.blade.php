<div>

    @include('livewire.admin.brand.modal-form')
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Lista de Marcas
                        <a href="#" class="btn btn-success btn-sm float-end" data-bs-toggle="modal"
                            data-bs-target="#addBrandModal">Adicionar Marca</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Categoria</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($brands as $brand)
                                <tr>
                                    <td>{{ $brand->id }}</td>
                                    <td>{{ $brand->name }}</td>
                                    <td>
                                        @if ($brand->category)
                                            {{ $brand->category->name }}
                                        @else
                                            Sem categoria
                                        @endif
                                    </td>
                                    <td>{{ $brand->slug }}</td>
                                    <td>{{ $brand->status == '1' ? 'Escondido' : 'Visivel' }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary"
                                            wire:click="editBrand({{ $brand->id }})" data-bs-toggle="modal"
                                            data-bs-target="#updateBrandModal">Editar</a>
                                        <a href="#" class="btn btn-danger"
                                            wire:click="deleteBrand({{ $brand->id }})" data-bs-toggle="modal"
                                            data-bs-target="#deleteBrandModal">Deletar</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">Nenhuma Marca Encontrada</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>
                        {{ $brands->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        window.addEventListener('close-modal', event => {
            $('#addBrandModal').modal('hide');
            $('#updateBrandModal').modal('hide');
            $('#deleteBrandModal').modal('hide');
        });
    </script>
@endpush

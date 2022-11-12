    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Marca</h1>
                    <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="storeBrand">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="">Nome da Marca</label>
                            <input type="text" wire:model.defer="name" class="form-control">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Marca Slug</label>
                            <input type="text" wire:model.defer="slug" class="form-control">
                            @error('slug')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Status</label> <br />
                            <input type="checkbox" wire:model.defer="status" /> Marcado=Escondido, Não Marcado=Visivel
                            @error('status')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="closeModal" class="btn btn-secondary"
                            data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- EditModal -->
    <div wire:ignore.self class="modal fade" id="updateBrandModal" tabindex="-1"
        aria-labelledby="updateBrandModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateBrandModalLabel">Editar Marca</h1>
                    <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div wire:loading class="p-2">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Carregando...</span>
                    </div>Carregando...
                </div>
                <div wire:loading.remove>
                    <form wire:submit.prevent="updateBrand">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="">Nome da Marca</label>
                                <input type="text" wire:model.defer="name" class="form-control">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Marca Slug</label>
                                <input type="text" wire:model.defer="slug" class="form-control">
                                @error('slug')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="">Status</label> <br />
                                <input type="checkbox" wire:model.defer="status" style="width: 20px; height: 20px;" />
                                Marcado=Escondido, Não Marcado=Visivel
                                @error('status')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" wire:click="closeModal"
                                data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <!-- DeleteModal -->
    <div wire:ignore.self class="modal fade" id="deleteBrandModal" tabindex="-1"
        aria-labelledby="deleteBrandModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteBrandModalLabel">Deletar Marca</h1>
                    <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div wire:loading class="p-2">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Carregando...</span>
                    </div>Carregando...
                </div>
                <div wire:loading.remove>
                    <form wire:submit.prevent="destroyBrand">
                        <div class="modal-body">
                            <h4>Tem certeza de que deseja excluir esses dados?</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" wire:click="closeModal"
                                data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-danger">Sim, deletar.</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

<div>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h4>Marcas</h4>
                </div>
                <div class="card-body">
                    @foreach ($category->brands as $Branditem)
                        <label for="" class="d-block">
                            <input type="checkbox" wire:model="brandInputs" value="{{ $Branditem->name }}">
                            {{ $Branditem->name }}
                        </label>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                @forelse ($products as $productItem)
                    <div class="col-md-4">
                        <div class="product-card">
                            <div class="product-card-img">
                                @if ($productItem->quantity > 0)
                                    <label class="stock bg-success">Em estoque</label>
                                @else
                                    <label class="stock bg-danger">Sem estoque</label>
                                @endif
                                @if ($productItem->productImages->count() > 0)
                                    <a
                                        href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                        <img src="{{ asset($productItem->productImages[0]->image) }}"
                                            alt="{{ $productItem->name }}">
                                    </a>
                                @endif
                            </div>
                            <div class="product-card-body">
                                <p class="product-brand">{{ $productItem->brand }}</p>
                                <h5 class="product-name">
                                    <a
                                        href="{{ url('/collections/' . $productItem->category->slug . '/' . $productItem->slug) }}">
                                        {{ $productItem->name }}
                                    </a>
                                </h5>
                                <div>
                                    <span class="selling-price">R${{ $productItem->selling_price }}</span>
                                    <span class="original-price">R${{ $productItem->original_price }}</span>
                                </div>
                                {{-- <div class="mt-2"> --}}
                                {{-- <a href="" class="btn btn1">Adicionar ao carrinho</a> --}}
                                {{-- <a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a> --}}
                                {{-- <a href="" class="btn btn1"> Ver </a> --}}
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <div class="p-2">
                            <h4>Nenhum produto encontrado para {{ $category->name }}</h4>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

</div>

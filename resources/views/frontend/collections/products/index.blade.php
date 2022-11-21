@extends('layouts.app')

@section('title')
    {{ $category->meta_title }}
@endsection

@section('content')
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Produtos da categoria {{ $category->name }}</h4>
                </div>
                @forelse ($products as $productItem)
                    <div class="col-md-3">
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
@endsection

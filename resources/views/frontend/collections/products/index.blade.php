@extends('layouts.app')

@section('title')
    {{ $category->meta_title }}
@endsection
@section('keyword')
    {{ $category->meta_keyword }}
@endsection
@section('description')
    {{ $category->meta_description }}
@endsection

@section('content')
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Produtos da categoria {{ $category->name }}</h4>
                </div>

                <livewire:frontend.product.index :category="$category" />

            </div>
        </div>
    </div>
@endsection

@extends('layouts.master')

@section('content')
    @foreach ($products as $product)
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Design</strong>
                    <h5 class="mb-0">
                        <a class="text-dark" href="#">{{ $product->title }}</a>
                    </h5>
                    <div class="mb-1 text-muted">{{ $product->created_at->format('d/m/Y') }}</div>
                    <p class="card-text mb-auto">{{ $product->subtitle }}</p>
                    <strong class="mb-auto">{{ $product->getPrice() }}</strong>
                    <a href="{{ route('products.show', $product->slug) }}" class="btn btn-info">Voir l'article</a>
                </div>
                <img src="{{ $product->image }}" class="">
            </div>
        </div>
    @endforeach
@endsection

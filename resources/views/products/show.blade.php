@extends('layouts.master')

@section('content')
    <div class="row mb-2">
        <div class="col-md-12">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Design</strong>
                    <h4 class="mb-0">
                        <a class="text-dark" href="#">{{ $product->title }}</a>
                    </h4>
                    <div class="mb-1 text-muted">{{ $product->created_at->format('d/m/Y') }}</div>
                    <p class="card-text mb-auto">{{ $product->description }}</p>
                    <strong class="mb-auto">{{ $product->getPrice() }}</strong>
                    <form action="{{ route('cart.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}" >
                        <button type="submit" class="btn btn-dark">Ajouter au panier</button>
                    </form>
                </div>
                <img src="{{ $product->image }}" class="">
            </div>
        </div>
    </div>
    </div>
@endsection

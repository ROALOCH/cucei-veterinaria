@extends('layouts.Arquitect')
@section('Content')
<script type="text/javascript" src="{{ asset('assets/js/home/utils.js') }}"></script>
<div class="container">
    <h1>
        {{ $isService ? 'Servicios' : 'Productos' }}
    </h1>
    <hr/>
    <div class='row d-flex justify-content-start'>
        @foreach($products as $product)
        <div class="col-lg-4 col-md-4 col-sm-10 card mr-2" style='max-width: 20rem'>
            <img class="card-img-top" src="{{ asset('storage/products/'.$product->image_url)  }}">
            <div class="card-body">
                <h4 class="card-title">{{ $product->name }}</h4>
                <p class="card-text text-justify">${{ $product->price }} MXN</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('Product.show',$product) }}" class="btn btn-icon btn-outline-info btn-block">
                    <span class="btn-inner--icon">
                        <i class="ni ni-bold-up"></i>
                    </span>
                    <span class="btn-inner--text">Ver</span>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

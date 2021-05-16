@extends('layouts.Arquitect')
@section('Content')
<script type="text/javascript" src="{{ asset('assets/js/home/utils.js') }}"></script>
<div class="container">
    <h1>Últimos Productos</h1>
    <a href="{{ route('Product.index') }}">Ver Todos</a>
    <hr/>
    <div class='d-flex flex-row justify-content-start mb-3'>
        @foreach($products as $product)
        <div class="col col-sm-8 col-md-4 col-lg-4">
            <div class="card mr-2">
                <img class="card-img-top" src="{{ asset('storage/products/'. $product->image_url) }}">
                <div class="card-body">
                    <h3 class="card-title">{{ $product->name }}</h3>
                    <p class="card-text">${{ $product->price }} MXN</p>
                    <a href="{{ config('APP_URL').'/Product/'.$product->id }}" class="btn btn-icon btn-outline-info btn-block">
                    <span class="btn-inner--icon">
                    <i class="ni ni-bold-up"></i>
                    </span>
                        <span class="btn-inner--text">Ver</span>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <h1>Últimos Servicios</h1>
    <a href="{{ route('Service.index') }}">Ver Todos</a>
    <hr/>
    <div class='d-flex flex-row justify-content-start mb-5'>
        @foreach($services as $service)
        <div class="col col-md-5 col-sm-10 col-lg-5">
            <div class="card m-2">
                <img class="card-img-top" src="{{ asset('storage/products/'. $service->image_url) }}">
                <div class="card-body">
                    <h3 class="card-title">{{ $service->name }}</h3>
                    <p class="card-text">${{ $service->price }} MXN</p>
                    <a href="{{ config('APP_URL').'/Product/'.$product->id }}" class="btn btn-icon btn-outline-info btn-block">
                    <span class="btn-inner--icon">
                    <i class="ni ni-bold-up"></i>
                    </span>
                        <span class="btn-inner--text">Ver</span>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

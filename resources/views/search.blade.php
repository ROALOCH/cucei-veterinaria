@extends('layouts.Arquitect')
@section('Content')

<div class="container">
    @if($query == '')
        <h1>No se encontró ningun resultado, intenta buscar de nuevo</h1>   
    @else
        <h1>Resultados de Búsqueda para: "{{$query}}"</h1>
    @endif
    <hr/>
    <div class='row d-flex justify-content-start'>
        @if($query != '')
            @foreach($products as $product)
            <div class="col-lg-4 col-md-4 col-sm-10 card mr-2" style='max-width: 20rem'>
                <img class="card-img-top" src="{{ $product->image_url  }}">
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
        @endif
    </div>
</div>
@endsection

@extends('layouts.Arquitect') @section('Content')
<div class="container">
    <h1>Ultimos Productos</h1>
    <hr/>
    <div class='d-flex flex-row justify-content-between'>
        @foreach($products as $product)
        <div class="col col-sm-8 col-md-4 col-lg-4">
            <div class="card m-2">
                <img class="card-img-top" src="{{ asset('storage/products/'. $product->image_url) }}">
                <div class="card-body">
                    <h3 class="card-title">DogChow Extra Life 15KG</h3>
                    <p class="card-text">$684.00 MXN</p>
                    <button class="btn btn-icon btn-outline-info btn-block" type="button">
                    <span class="btn-inner--icon">
                    <i class="ni ni-bold-up"></i>
                    </span>
                        <span class="btn-inner--text">Ver</span>
                    </button>
                </div>
            </div>
        </div>

        @endforeach
        <div class="m-2 d-flex justify-content-center">
            <button class='btn btn-icon btn-primary'>
                <span class='btn-inner--icon'>
                    <i class='ni ni-bold-right'></i>
                </span>
            </button>
        </div>
    </div>
    <h1>Ultimos Servicios</h1>
    <hr/>
    <div class='d-flex flex-row justify-content-between mb-5'>
        <div class="card m-2">
            <img class="card-img-top" src="https://bit.ly/3uvGSgk">
            <div class="card-body">
                <h3 class="card-title">Baño de Mascota Premium</h3>
                <p class="card-text">$350.00 MXN</p>
                <button class="btn btn-icon btn-outline-info btn-block" type="button">
                    <span class="btn-inner--icon">
                    <i class="ni ni-bold-up"></i>
                    </span>
                    <span class="btn-inner--text">Ver</span>
                </button>
            </div>
        </div>
        <div class="card m-2">
            <img class="card-img-top" src="https://bit.ly/3uvGSgk">
            <div class="card-body">
                <h3 class="card-title">Baño de Mascota Premium</h3>
                <p class="card-text">$350.00 MXN</p>
                <button class="btn btn-icon btn-outline-info btn-block" type="button">
                    <span class="btn-inner--icon">
                    <i class="ni ni-bold-up"></i>
                    </span>
                    <span class="btn-inner--text">Ver</span>
                </button>
            </div>
        </div>
        <div class="m-2 d-flex justify-content-center">
            <button class='btn btn-icon btn-primary'>
                <span class='btn-inner--icon'>
                    <i class='ni ni-bold-right'></i>
                </span>
            </button>
        </div>
    </div>
</div>
@endsection

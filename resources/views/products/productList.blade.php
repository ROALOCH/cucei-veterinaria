@extends('layouts.Arquitect')
@section('Content')
<script type="text/javascript" src="{{ asset('assets/js/home/utils.js') }}"></script>
<div class="container">
    <h1>Productos</h1>
    <hr/>
    <div class='row d-flex justify-content-start'>
        <div class="col-4 card mr-2" style='max-width: 20rem'>
            <img class="card-img-top" src="https://bit.ly/3uHGI5P">
            <div class="card-body">
                <h4 class="card-title">Whiskas Temptations 85G</h4>
                <p class="card-text text-justify">$400.00 MXN</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-icon btn-outline-info btn-block">
                    <span class="btn-inner--icon">
                        <i class="ni ni-bold-up"></i>
                    </span>
                    <span class="btn-inner--text">Ver</span>
                </a>
            </div>
        </div>
    </div>

    <h1>Servicios</h1>
    <hr/>
    <div class='row d-flex justify-content-start'>
        <div class="col-4 card mr-2" style='max-width: 20rem'>
            <img class="card-img-top" src="https://bit.ly/3uHGI5P">
            <div class="card-body">
                <h4 class="card-title">Whiskas Temptations 85G</h4>
                <p class="card-text text-justify">$400.00 MXN</p>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-icon btn-outline-info btn-block">
                    <span class="btn-inner--icon">
                        <i class="ni ni-bold-up"></i>
                    </span>
                    <span class="btn-inner--text">Ver</span>
                </a>
            </div>
        </div>
    </div>
    
</div>
@endsection

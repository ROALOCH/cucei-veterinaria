@extends('layouts.Arquitect') @section('Content')
<div class="container">
    <h1 class='text-center mb-5'>Carrito de Compras</h1>
    <div class='table-responsive'>
        <table class="table align-items-center">
            <thead class='thead-light'>
                <tr>
                    <th scope='col'>Código</th>
                    <th scope='col'>Nombre</th>
                    <th scope='col'>Precio</th>
                    <th scope='col'>Cantidad</th>
                    <th scope='col'>Total</th>
                    <th scope='col'></th>
                </tr>
            </thead>
            <tbody>
                @foreach($basket as $cart)
                <tr>
                    <td>{{ $cart->product_id }}</td>
                    <td>{{ $cart->product->name }}</td>
                    <td>${{ $cart->product->price }}</td>
                    <td class='w-25'>
                        <div>
                            <input class='form-control' type='number' min='1' step='1' value="{{ $cart->quantity }}"/>
                        </div>
                    </td>
                    <td>
                        <strong>${{ $cart->total }}</strong>
                    </td>
                    <td>
                        <button class='btn btn-icon btn-outline-danger'>
                            <span class='btn-inner--icon'>
                                <i class='fas fa-trash'></i>
                            </span>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class='card p-3'>
            <div class='row'>
                <div class="col-8 d-flex align-items-center">
                    <h3>Total a Pagar: $2,052.00 MXN</h3>
                </div>
                <div class='col-4 d-flex align-items-center justify-content-end'>
                    <button
                        class="btn btn-icon btn-3 btn btn-outline-success"
                        type="button"
                    >
                        <span class="btn-inner--icon">
                            <i class="ni ni-credit-card"></i>
                        </span>
                        <span class="btn-inner--text">Pagar</span>
                    </button>
                    <button
                        class="btn btn-icon btn-3 btn btn-outline-danger"
                        type="button"
                    >
                        <span class="btn-inner--icon">
                            <i class="ni ni-fat-delete"></i>
                        </span>
                        <span class="btn-inner--text">Eliminar Carrito</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

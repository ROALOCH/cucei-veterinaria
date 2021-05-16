@extends('layouts.Arquitect') @section('Content')
<script type="text/javascript" src="{{ asset('assets/js/cart/update.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/cart/delete.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/cart/clean.js') }}"></script>
<div class="container">
    <h1 class='text-center mb-5'>
        Carrito de Compras
        @if(count($basket) < 1)
            Vacio
        @endif
    </h1>
    <div class='table-responsive'>
        @if(count($basket) > 0)
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
                <tr id="{{ $cart->id }}">
                    <td>{{ $cart->product_id }}</td>
                    <td>{{ $cart->product->name }}</td>
                    <td>${{ $cart->product->price }}</td>
                    <td class='w-25'>
                        <div>
                            <input
                                class='form-control'
                                type='number'
                                min='1'
                                step='1'
                                onchange="updateCart('{{ $cart->id }}', '{{ $cart->product->stock }}','{{ $cart->product->type }}')"
                                value="{{ $cart->quantity }}"/>

                        </div>
                    </td>
                    <td>
                        <strong>${{ $cart->total }}</strong>
                    </td>
                    <td>
                        <button
                            onclick="deleteCart('{{ $cart->id }}')"
                            class='btn btn-icon btn-outline-danger'>
                            <span class='btn-inner--icon'>
                                <i class='fas fa-trash'></i>
                            </span>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <form id="updateCart" action="{{ config('APP_URL').'/Cart/' }}" method="post">
            {{ method_field('PUT') }}
            {{ @csrf_field() }}
            <input type="hidden" name="id" id="cart_id" value="">
            <input type="hidden" name="quantity" id="quantity" value="">
        </form>
        <form id="deleteCart" action="{{ config('APP_URL').'/Cart/' }}" method="post">
            {{ method_field('DELETE') }}
            {{ @csrf_field() }}
            <input type="hidden" name="id" id="cart_id" value="">
        </form>
        <form id="clean" action="{{ config('APP_URL').'/Cart/clean' }}" method="post">
            {{ method_field('DELETE') }}
            {{ @csrf_field() }}
        </form>
        <div class='card p-3'>
            <div class='row'>
                <div class="col-8 d-flex align-items-center">
                    <h3>Total a Pagar: ${{ App\Models\Cart::total($basket) }} MXN</h3>
                </div>
                <div class='col-4 d-flex align-items-center justify-content-end'>
                    <button
                        class="btn btn-icon btn-3 btn btn-outline-success"
                        type="button"
                        data-toggle="modal"
                        data-target="#paymentInfo"
                    >
                        <span class="btn-inner--icon">
                            <i class="ni ni-credit-card"></i>
                        </span>
                        <span class="btn-inner--text">Pagar</span>
                    </button>
                    <button
                        class="btn btn-icon btn-3 btn btn-outline-danger"
                        type="button"
                        onclick="clean()"
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
    @endif
</div>

<!-- Modal Pago -->
<div class="modal fade" id="paymentInfo" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Información del Pago</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class='row'>
            <div class='col-8'>
                <div class="form-group">
                    <label for="card-name">Titular de la Tarjeta</label>
                    <input type="text" class="form-control" id="card-name">
                </div>
                <div class="form-group">
                    <label for="card-name">Número de Tarjeta</label>
                    <input type="text" class="form-control" id="card-name">
                </div>
                <div class='row'>
                    <div class='col-6'>
                        <div class="form-group">
                            <label for="card-name">Fecha Expiración</label>
                            <input type="text" class="form-control" id="card-name" placeholder='MM/AA'>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="card-name">CCV</label>
                            <input type="text" class="form-control" id="card-name">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <h2 class='text-center'>Información de Orden</h2>
                <hr/>
                <h3>Pedido Número: 1234</h3>
                <h3>Total a Pagar: $500.00 MXN</h3>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success">Confirmar Pago</button>
      </div>
    </div>
  </div>
</div>
@endsection

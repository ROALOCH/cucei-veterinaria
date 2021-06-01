@extends('layouts.Arquitect')
@section('Content')
        <script type="text/javascript" src="{{ asset('assets/js/product/show.js') }}"></script>
        <div class="row d-flex justify-content-center">
            <!-- CARD IMAGEN -->
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <img
                        class="card-img-top"
                        src="{{ $product->image_url }}"
                        alt="product"
                    />
                </div>
            </div>
            <!-- CARD DETALLES -->
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center">{{ $product->name }}</h1>
                        <p class="card-text">
                            {{ $product->description }}
                        </p>
                        <hr />
                        <h2 class="text-center"> ${{ $product->price }} MXN</h2>
                        @if($product->type == 'product')
                        <h2 class="text-center"><b id="stock">{{ $product->stock }} </b> disponibles</h2>
                        @endif
                        <hr>
                        <!-- BOTÓN AGREGAR CARRITO -->

                        <div class="d-flex justify-content-center">
                            @can('isClient')
                            <form action="{{ route('Cart.store') }}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input class="form-control"
                                       name="quantity"
                                       id="quantity"
                                       type="number"
                                       value="0"
                                       min="1"
                                       max="{{ $product->type == 'product' ? $product->stock : 100000 }}" required>
                                <input type="submit" id="submit" style="display: none">
                                <br>
                                <button
                                    class="btn btn-icon btn-3 btn btn-outline-success"
                                    type="button"
                                    onclick="_submit('{{ $product->type }}');"
                                >
                                <span class="btn-inner--icon"
                                ><i class="ni ni-basket"></i
                                    ></span>
                                    <span class="btn-inner--text">Agregar al Carrito</span>
                                </button>
                            </form>
                            @endcan
                            @can('isAdmin')
                                    <a
                                        class="btn btn-icon btn-3 btn btn-outline-success"
                                        href="{{route('Product.edit', $product)}}"
                                    >
                                <span class="btn-inner--icon"
                                ><i class="ni ni-active-40"></i
                                    ></span>
                                        <span class="btn-inner--text">Editar {{ $product->type == 'product' ? 'producto' : 'servicio' }}</span>
                                    </a>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

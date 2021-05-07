@extends('layouts.Arquitect')
@section('Content')
        <div class="row">
            <!-- CARD IMAGEN -->
            <div class="col-7">
                <div class="card">
                    <img
                        class="card-img-top"
                        src="https://bit.ly/3xLh9m1"
                        alt="product"
                    />
                </div>
            </div>
            <!-- CARD DETALLES -->
            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">DogChow Extra Life 15KG</h1>
                        <p class="card-text">
                            En Purina Dog Chow compartimos la responsabilidad de mejorar la
                            calidad de vida de tu perro - 100% completo y balanceado -
                            Contiene una mezcla especial de antioxidantes, vitaminas y
                            minerales - Promueve un pelaje brillante - Ayuda a mantener sus
                            dientes limpios
                        </p>
                        <hr />
                        <h2>$684.00 MXN</h2>
                        <hr />

                        <!-- BOTÓN AGREGAR CARRITO -->

                        <div class="d-flex justify-content-center">
                            <button
                                class="btn btn-icon btn-3 btn btn-outline-success"
                                type="button"
                            >
                                <span class="btn-inner--icon"
                                    ><i class="ni ni-basket"></i
                                ></span>
                                <span class="btn-inner--text">Agregar al Carrito</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

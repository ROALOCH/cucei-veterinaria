@extends('layouts.Arquitect') @section('Content')
<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">Productos/Servicios</h3>
              </div>
              <div class="col-4 text-right">
                <a class="btn btn-icon btn-primary align-items-center" href="#">
                    <span class="btn-inner--icon"><i class="fa fa-shopping-bag"></i></span>
                    <span class="btn-inner--text">Agregar Nuevo</span>
                </a>
              </div>
            </div>
          </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="name">Nombre</th>
                <th scope="col" class="sort " data-sort="name">Precio</th>
                <th scope="col" class="sort " data-sort="name">Stock</th>
                <th scope="col" class="sort " data-sort="name">Tipo</th>
                <th scope="col" class="sort " data-sort="name"></th>
              </tr>
            </thead>
            <tbody class="list">
              <tr>
                <td>DogChow</td>
                <td>$500.00 MXN</td>
                <td>5</td>
                <td>Producto</td>
                <td class="text-right">
                    <button class="btn btn-icon btn-outline-danger">
                        <span class="btn-inner--icon">
                            <i class="fa fa-trash"></i>
                        </span>
                    </button>
                    <button class="btn btn-icon btn-outline-info">
                        <span class="btn-inner--icon">
                            <i class="fas fa-pen"></i>
                        </span>
                    </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

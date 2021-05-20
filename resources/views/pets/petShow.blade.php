@extends('layouts.Arquitect') @section('Content')
<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">Mascota <b>{{ $pet->name }}</b></h3>
              </div>
              <div class="col-4 text-right">
                <button class="btn btn-icon btn-primary align-items-center" type="button">
                    <span class="btn-inner--icon"><i class="fa fa-paw"></i></span>
                    <span class="btn-inner--text">Agregar Nueva Mascota</span>
                </button>
              </div>
            </div>
          </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="name">Nombre</th>
                <th scope="col" class="sort " data-sort="name">Especie</th>
                <th scope="col" class="sort " data-sort="name">Raza</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="list">
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <div class="media-body ">
                      <span class="name mb-0 text-sm ">{{ $pet->name }}</span>
                    </div>
                  </div>
                </th>
                <td class="name" >
                  {{ $pet->race }}
                </td>
                <td class="name">
                    {{ $pet->breed }}
                </td>

              </tr>
            </tbody>
          </table>
        </div>
        <!-- Card footer -->
      </div>
    </div>
  </div>
@endsection

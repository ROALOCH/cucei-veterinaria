@extends('layouts.Arquitect') @section('Content')
<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">Tus Mascotas</h3>
              </div>
              <div class="col-4 text-right">
                <a class="btn btn-icon btn-primary align-items-center" href="{{ route('Pet.create') }}">
                    <span class="btn-inner--icon"><i class="fa fa-paw"></i></span>
                    <span class="btn-inner--text">Agregar Nueva Mascota</span>
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
                <th scope="col" class="sort " data-sort="name">Especie</th>
                <th scope="col" class="sort " data-sort="name">Raza</th>
                <th scope="col">Color</th>
                <th></th>
              </tr>
            </thead>
            <tbody class="list">
              @foreach($pets as $pet)
              <tr>
                <td class='name'>{{ $pet->name }}</td>
                <td class="name" >
                  {{ $pet->race }}
                </td>
                <td class="name">
                    {{ $pet->breed }}
                </td>
                <td class="name">
                    {{ $pet->color }}
                </td>
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
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

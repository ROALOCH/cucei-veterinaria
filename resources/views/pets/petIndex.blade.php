@extends('layouts.Arquitect') @section('Content')
<script type="text/javascript" src="{{ asset('assets/js/pets/destroy.js') }}"></script>
<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
            @can('isClient')
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">
                    Tus Mascotas
                </h3>
              </div>
              <div class="col-4 text-right">
                <a class="btn btn-icon btn-primary align-items-center" href="{{ route('Pet.create') }}">
                    <span class="btn-inner--icon"><i class="fa fa-paw"></i></span>
                    <span class="btn-inner--text">Agregar Nueva Mascota</span>
                </a>
              </div>
            </div>
            @endcan
            @can('isAdmin')
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">
                                Mascotas Registradas
                            </h3>
                        </div>
                        <div class="col-4 text-right">

                        </div>
                    </div>
            @endcan
          </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                @can('isAdmin')
                <th scope="col" class="sort">Cliente</th>
                @endcan
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
                @can('isAdmin')
                <td class="name">{{ $pet->user->name }}</td>
                @endcan
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
                    <form action="{{route('Pet.destroy', $pet)}}" method="post" style="display: inline;">
                        @method('DELETE')
                        <input type="submit" style="display: none">
                        {{ csrf_field() }}

                        <button class="btn btn-icon btn-outline-danger"
                                onclick="destroy(this, event)"
                        >
                        <span class="btn-inner--icon">
                            <i class="fa fa-trash"></i>
                        </span>
                        </button>
                    </form>
                    <a class="btn btn-icon btn-outline-info" href="{{ route('Pet.edit', $pet) }}">
                        <span class="btn-inner--icon">
                            <i class="fas fa-pen"></i>
                        </span>
                    </a>
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

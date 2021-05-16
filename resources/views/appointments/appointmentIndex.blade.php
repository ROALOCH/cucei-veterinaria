@extends('layouts.Arquitect') @section('Content')
<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">Citas Agendadas</h3>
              </div>
            </div>
          </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="name">Nombre Cliente</th>
                <th scope="col" class="sort " data-sort="name">Fecha Cita</th>
                <th scope="col" class="sort " data-sort="name">Mascota</th>
                <th scope="col" class="sort " data-sort="name"></th>
              </tr>
            </thead>
            <tbody class="list">
              <tr>
                <td>Rodrigo Ochoa</td>
                <td>06/07/2021</td>
                <td>Mozzy</td>
                <td class="text-right">
                    <button class="btn btn-icon btn-outline-danger">
                        <span class="btn-inner--icon">
                            <i class="fa fa-trash"></i>
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

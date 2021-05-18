@extends('layouts.Arquitect') @section('Content')
<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                @can('isAdmin')
                <h3 class="mb-0">Citas Agendadas</h3>
                @endcan
                @can('isClient')
                    <h3 class="mb-0">Mis Citas</h3>
                @endcan
              </div>
              @can('isClient')
              <div class="col-4 text-right">
                <button class="btn btn-icon btn-primary align-items-center" type='button' data-toggle="modal" data-target="#newAppointment">
                  <span class="btn-inner--icon"><i class="ni ni-collection"></i></span>
                  <span class="btn-inner--text">Nueva cita</span>
                </button>
              </div>
              @endcan
            </div>
          </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                @can('isAdmin')
                <th scope="col" class="sort" data-sort="name">Nombre Cliente</th>
                @endcan
                <th scope="col" class="sort " data-sort="name">Fecha Cita</th>
                <th scope="col" class="sort " data-sort="name">Mascota</th>
                <th scope="col" class="sort " data-sort="name"></th>
              </tr>
            </thead>
            <tbody class="list">
              @foreach($appointments as $appointment)
              <tr>
                @can('isAdmin')
                      <td>Rodrigo Ochoa</td>
                @endcan
                <td>{{ $appointment->scheduled_for }}</td>
                <td>{{ $appointment->pet->name }}</td>
                <td class="text-right">
                    <form action="{{ route('Appointements.destroy', $appointment) }}" method="post">
                        {{ csrf_field() }}
                        @method('delete')
                      <button
                          onclick="this.parent.submit();"
                          class="btn btn-icon btn-outline-danger">
                        <span class="btn-inner--icon">
                            <i class="fa fa-trash"></i>
                        </span>
                      </button>
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@can('isClient')
<div class="modal fade" id="newAppointment" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Información de Cita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="store" action="{{ route('Appointements.store') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="form-control-label" for="name">Nombre del Cliente</label>
                                    <input id='name' type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" readonly>
                                </div>
                                <div class='row'>
                                    <div class="col-6 form-group">
                                        <label class="form-control-label" for="pet">Mascota</label>
                                        <select class='form-control' name="pet_id" id="pet" required>
                                            <option value="" disabled selected>Nombre de Mascota</option>
                                            @foreach($pets as $pet)
                                            <option value="{{ $pet->id }}"> {{ $pet->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class='col-6 form-group'>
                                        <label class="form-control-label" for="date">Fecha de Cita</label>
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control" type="datetime-local"
                                                   name="scheduled_for"
                                                   min="{{ Carbon\Carbon::now()->format('d-m-Y') }}" id="date" required>
                                        </div>
                                    </div>
                                    <input type="submit" style="display: none" id="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-success" onclick="document.getElementById('submit').click()">Confirmar Cita</button>
            </div>
        </div>
    </div>
</div>
@endcan
@endsection

@extends('layouts.Arquitect') @section('Content')
<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">Tus Citas</h3>
              </div>
              <div class="col-4 text-right">
                <button class="btn btn-icon btn-primary align-items-center" type='button' data-toggle="modal" data-target="#newAppointment">
                    <span class="btn-inner--icon"><i class="ni ni-collection"></i></span>
                    <span class="btn-inner--text">Nuevo</span>
                </button>
              </div>
            </div>
          </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="name">Fecha de Cita</th>
                <th scope="col" class="sort " data-sort="name">Mascota</th>
                <th scope="col" class="sort " data-sort="name"></th>
              </tr>
            </thead>
            <tbody class="list">
              <tr>
                <td>06/07/2021</td>
                <td>Mozzy</td>
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

  <!-- Modal Nueva Cita -->
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
        <form>
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label class="form-control-label" for="name">Nombre del Cliente</label>
                            <input id='name' type="text" name="name" class="form-control" value="Rodrigo Ochoa Herrera" readonly>
                        </div>
                        <div class='row'>
                            <div class="col-6 form-group">
                            <label class="form-control-label" for="pet">Mascota</label>
                                <select class='form-control' name="pet" id="pet">
                                    <option value='producto'>Mozzy</option>
                                </select>
                            </div>
                            <div class='col-6 form-group'>
                                <label class="form-control-label" for="date">Fecha de Cita</label>
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                    </div>
                                    <input class="form-control datepicker" type="text" value="20/04/2021" name='date' id='date'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success">Confirmar Cita</button>
      </div>
    </div>
  </div>
</div>
@endsection

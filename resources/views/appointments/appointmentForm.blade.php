@extends('layouts.Arquitect') @section('Content')
<div class="align col">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">Reservación de Cita</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
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
                <div class="text-right">
                    <input type="submit" class="btn btn-primary my-4" value="Registrar">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

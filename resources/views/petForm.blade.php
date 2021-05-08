@extends('layouts.Arquitect') @section('Content')
<div class="align col">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">Información de la Mascota</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form>
                <h6 class="heading-small text-muted mb-4">Información General</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Nombre</label>
                                <input type="text" id="input-username" class="form-control" placeholder="Nombre de Mascota" value="Apolo">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="example-datetime-local-input" class="form-control-label">Fecha de Nacimiento</label>
                                <input class="form-control" type="date" value="2018-11-23" id="example-datetime-local-input">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">Color</label>
                                <input type="text" id="input-country" class="form-control" placeholder="Color" value="Café">
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Information de Especie/Raza</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="form-control">Especie</label>
                                <select class="form-control">
                                    <option>Perro</option>
                                    <option>Gato</option>
                                    <option>Conejo</option>
                                    <option>Roedor</option>
                                    <option>Tortuga</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-race">Raza</label>
                                <input type="text" id="input-race" class="form-control" placeholder="Raza" value="Golden retriever">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-primary my-4">Registrar Mascota</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

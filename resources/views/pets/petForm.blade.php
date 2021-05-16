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
            @if (isset($receta))
                <form action="{{ route('Pet.update', [$pet]) }}" method="POST">
                    @method('patch')
            @else
                <form action="{{route('Pet.store')}}" method="POST">
            @endif
                {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <h6 class="heading-small text-muted mb-4">Información General</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="form-control-label" for="name">Nombre</label>
                                <input type="text" id="name" name="name" class="form-control" value="{{old('name')?? $pet->name ?? ""}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="example-datetime-local-input" class="form-control-label">Fecha de Nacimiento</label>
                                <input type="date" id="birth_date" name="birth_date" class="form-control" value="{{old('birth_date')?? $pet->birth_date ?? "2018-11-23"}}" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-color">Color</label>
                                <input type="text" id="color" name="color" class="form-control" value="{{old('color')?? $pet->color ?? ""}}">
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Informacíon de Especie/Raza</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="race-selector">Especie</label>
                                <select name="race" class="form-control" id="race-selector" value="value="{{old('color')?? $pet->color ?? ''}}">
                                    <option value="Perro">Perro</option>
                                    <option value="Gato">Gato</option>
                                    <option value="Conejo">Conejo</option>
                                    <option value="Roedor">Roedor</option>
                                    <option value="Tortuga">Tortuga</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-race">Raza</label>
                                <input type="text" id="race" class="form-control" value="{{old('race')?? $pet->race ?? ""}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary my-4">Registrar Mascota</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

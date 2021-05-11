@extends('layouts.Arquitect') @section('Content')
<div class="align col">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">Información General</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('Product.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="form-control-label" for="name">Nombre</label>
                                <input id='name' type="text" name="name" class="form-control" value="DogChow Extra Life 15KG">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="description">Descripción</label>
                                <textarea type="text" id='description' name="description" class="form-control" value="DogChow Extra Life 15KG" maxlength='500' rows='5'>En Purina Dog Chow compartimos la responsabilidad de mejorar la calidad de vida de tu perro - 100% completo y balanceado - Contiene una mezcla especial de antioxidantes, vitaminas y minerales - Promueve un pelaje brillante - Ayuda a mantener sus dientes limpios
                                </textarea>
                            </div>
                            <div class='row'>
                                <div class="col-6 form-group">
                                    <label class="form-control-label" for="image-input">Imagen</label>
                                    <input type="file" id='image' name="image" class="form-control">
                                </div>
                                <div class='col-6 form-group'>
                                    <label class="form-control-label" for="price">Precio</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="number" id='price' name='price' step='0.01' class="form-control" value='684.00'>
                                        <div class="input-group-append">
                                            <span class="input-group-text">MXN</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-6 form-group'>
                                    <label class="form-control-label" for="stock">Cantidad a Almacen</label>
                                    <input type="number" step='0.01' id='stock' name="stock" class="form-control" value='10'>
                                </div>
                                <div class='col-6 form-group'>
                                    <label class="form-control-label" for="type">Tipo de Registro</label>
                                    <select class='form-control' name="type" id="type">
                                        <option value='producto'>Producto</option>
                                        <option value='servicio'>Servicio</option>
                                    </select>
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

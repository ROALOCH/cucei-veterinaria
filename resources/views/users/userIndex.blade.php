@extends('layouts.Arquitect') @section('Content')
<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <h3 class="mb-0">Usuarios Registrados</h3>
              </div>
            </div>
          </div>
        <!-- Light table -->
        <div class="table-responsive">
          <table  id="table-users" class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col" class="sort" data-sort="name">Nombre</th>
                <th scope="col" class="sort " data-sort="name">Email</th>
                <th scope="col" class="sort " data-sort="name">Tipo de usuario</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="list">
            @foreach($users as $user)
              <tr>
                <th scope="row navbar-nav align-items-center  ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                          <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                              <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="{{ $user->profile_photo_url}}">
                              </span>
                              <div class="media-body  ml-2  d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold">{{$user->name}}</span>
                              </div>
                            </div>
                          </a>
                        </li>
                </th>
                <td class="mail" >
                  {{$user->email}}
                </td>
                <td>
                        <form action="{{ route('User.update', [$user]) }}" method="POST" id="ajaxform" name="form">
                            @method("PUT")
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <select onchange="mySubmit(this.form)" name="userType" class="form-control" id="userType" value="value="{{old('userType')?? $user->user_type ?? ''}}">
                                @if ($user->user_type == "admin")
                                <option value="admin" selected>Administrador</option>
                                <option value="client" >Cliente</option>
                                @else
                                <option value="admin" >Administrador</option>
                                <option value="client" selected>Cliente</option>

                                @endif
                            </select>
                        </form>

                </td>

                <td class="text-right">

                        <form action="{{ route('User.destroy', [$user]) }}" method="POST" id="ajaxform" name="form">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-icon btn-outline-danger">
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
  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
</script>
<script>
function mySubmit(theForm) {
    console.log($(theForm).serialize());
    $.ajax({ // create an AJAX call...
        data: $(theForm).serialize(), // get the form data
        type: $(theForm).attr('method'), // GET or POST
        url: $(theForm).attr('action'), // the file to call
        success: function (response) { // on success..
            console.log(response);
            refreshTable();
        },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            },
    });
}
function refreshTable() {
    $("#table-users").load(window.location + " #table-users");
}
</script>
@endsection

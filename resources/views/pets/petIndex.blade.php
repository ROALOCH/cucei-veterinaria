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
                <button class="btn btn-icon btn-primary align-items-center" type="button">
                    <span class="btn-inner--icon"><i class="fa fa-paw"></i></span>
                    <span class="btn-inner--text">Agregar Nueva Mascota</span>
                </button>
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
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody class="list">
              <tr>
                <th scope="row">
                  <div class="media align-items-center">
                    <a href="#" class="avatar rounded-circle mr-3">
                      <img alt="Image placeholder" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimage.freepik.com%2Ffoto-gratis%2Fgolden-retriever-7-anos-sentado-retrato-perro-aislado_191971-2732.jpg&f=1&nofb=1">
                    </a>
                    <div class="media-body ">
                      <span class="name mb-0 text-sm ">Timmy</span>
                    </div>
                  </div>
                </th>
                <td class="name" >
                  Perro
                </td>
                <td class="name">
                    Golden Retriever
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
            </tbody>
          </table>
        </div>
        <!-- Card footer -->
        <div class="card-footer py-4">
          <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <i class="fas fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <i class="fas fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
@endsection
